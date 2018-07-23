<?php

use App\Models\Coin;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

/**
 * Class CoinsTableSeeder.
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
        $this->command->line('');
        $this->command->info('####################################################');
        $this->command->info('## Running Seed 3/4 ################################');
        $this->command->info('####################################################');
        $this->command->line('');
        $this->command->info('Getting Coins on CoinMarketCap API.');

        try {
            $this->client = new Client(['base_uri' => 'https://api.coinmarketcap.com/v2/ticker/']);

            DB::transaction(function () {
                /**
                 * Starting first getting only one coin, Because CoinMarket returns the total coins in the response.
                 * So i get do this to get the total cryptocurrencies number to iterate.
                 * Also i insert the first coin i get.
                 */
                $start = 1;
                $limit = 1;
                $this->getCurrencies($start, $limit);
                $this->command->info($this->totalCryptocurrencies.' Coins founded.');
                $this->command->info('Seeding table with coins. It will take a minute approx.');
                $this->command->info('Coin database insert progress:');

                $start = 2;
                $limit = 50;
                do {
                    $this->command->comment($start.' of '.$this->totalCryptocurrencies.' Coins...');
                    $this->getCurrencies($start, $limit);

                    $start += 50;
                } while ($start < $this->totalCryptocurrencies);
            });

        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
        $this->command->line('');
        $this->command->info('Coins table seeding finished!');
        $this->command->line('');
    }

    /**
     * @param int $start
     * @param int $limit
     *
     * @throws Exception
     */
    private function getCurrencies(int $start = 1, int $limit = 1)
    {
        // Doing the query
        $response = $this->client->get('?convert=BTC&start='.$start.'&limit='.$limit.'&sort=id');
        // Getting the body of the response
        $responseBody = $response->getBody();
        // Decoding response to associative array
        $responseArray = json_decode($responseBody, true);
        // And response code
        $responseStatusCode = $response->getStatusCode();

        // If response is major than 300 an error has occurred.
        if ($responseStatusCode > 300) {
            throw new Exception('Error getting currencies.', $responseStatusCode);
        }

        $responseDataArray = $responseArray['data'];

        // Setting the total of coins to variable
        $this->totalCryptocurrencies = $responseArray['metadata']['num_cryptocurrencies'];

        // Creating coin
        $this->createCoin($responseDataArray);
    }

    /**
     * @param array|null $currencies
     */
    private function createCoin(array $currencies = null)
    {
        foreach ($currencies as $item) {
            Coin::create([
                'name'               => $item['name'],
                'symbol'             => $item['symbol'],
                'logo'               => null,
                'rank'               => $item['rank'],
                'price_usd'          => $item['quotes']['USD']['price'],
                'price_btc'          => $item['quotes']['BTC']['price'],
                '24h_volume_usd'     => $item['quotes']['USD']['volume_24h'],
                'market_cap_usd'     => $item['quotes']['USD']['market_cap'],
                'available_supply'   => $item['circulating_supply'],
                'total_supply'       => $item['total_supply'],
                'percent_change_1h'  => $item['quotes']['USD']['percent_change_1h'],
                'percent_change_24h' => $item['quotes']['USD']['percent_change_24h'],
                'percent_change_7d'  => $item['quotes']['USD']['percent_change_7d'],
            ]);
        }
    }
}
