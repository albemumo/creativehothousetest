<?php

use App\Coin;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

class CoinTableSeeder extends Seeder
{
    private $client;
    private $totalCryptocurrencies;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coin::truncate();

        try {
            $this->client = new Client(['base_uri' => 'https://api.coinmarketcap.com/v2/ticker/']);

            $start = 1;
            $limit = 1;
            $this->getCurrencies($start, $limit);

            $start = 2;
            $limit = 50;
            do {
                $this->getCurrencies($start, $limit);

                $start += 50;
            } while ($start < $this->totalCryptocurrencies);

        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    private function getCurrencies($start, $limit) {
        $response = $this->client->get('?convert=BTC&start=' . $start . '&limit=' . $limit . '&sort=id');
        $responseBody = $response->getBody();
        $responseArray = json_decode($responseBody, true);
        $responseDataArray = $responseArray['data'];
        $responseStatusCode = $response->getStatusCode();

        if ($responseStatusCode > 300) {
            throw new Exception('Error getting currencies.', $responseStatusCode);
        }

        $this->totalCryptocurrencies = $responseArray['metadata']['num_cryptocurrencies'];

        $this->createCoin($responseDataArray);
    }

    private function createCoin($currencies) {
        foreach($currencies as $item) {
            Coin::create([
                'name' => $item['name'],
                'symbol' => $item['symbol'],
                'logo' => null,
                'rank' => $item['rank'],
                'price_usd' => $item['quotes']['USD']['price'],
                'price_btc' => $item['quotes']['BTC']['price'],
                '24h_volume_usd' => $item['quotes']['USD']['volume_24h'],
                'market_cap_usd' => $item['quotes']['USD']['market_cap'],
                'available_supply' => $item['circulating_supply'],
                'total_supply' => $item['total_supply'],
                'percent_change_1h' => $item['quotes']['USD']['percent_change_1h'],
                'percent_change_24h' => $item['quotes']['USD']['percent_change_24h'],
                'percent_change_7d' => $item['quotes']['USD']['percent_change_7d'],
            ]);
        }
    }
}
