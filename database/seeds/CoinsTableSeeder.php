<?php

use App\Coin;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

/**
 * Class CoinsTableSeeder
 */
class CoinsTableSeeder extends Seeder
{
    /**
     * @var
     */
    private $client;
    /**
     * @var
     */
    private $totalCryptocurrencies;


    /**
     * Seed the Coin's table.
     *
     * @throws Exception
     */
    public function run()
    {
        try {
            $this->client = new Client(['base_uri' => 'https://api.coinmarketcap.com/v2/ticker/']);

            DB::transaction(function() {
                $start = 1;
                $limit = 1;
                $this->getCurrencies($start, $limit);
                $this->command->info($this->totalCryptocurrencies . ' Coins founded in CoinMarketCap API.');
                $this->command->info('Coin database insert status:');

                $start = 2;
                $limit = 50;
                do {
                    $this->command->comment($start . ' of ' . $this->totalCryptocurrencies . ' Coins...');
                    $this->getCurrencies($start, $limit);

                    $start += 50;
                } while ($start < $this->totalCryptocurrencies);
            });

            $this->command->info('Coins table seeding finished!');
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }


    /**
     * @param int $start
     * @param int $limit
     * @throws Exception
     */
    private function getCurrencies(int $start = 1, int $limit = 1) {
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


    /**
     * @param array|null $currencies
     */
    private function createCoin(array $currencies = null) {
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
