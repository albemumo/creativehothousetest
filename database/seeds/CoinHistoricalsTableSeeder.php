<?php

use App\Models\Coin;
use App\Models\CoinHistorical;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

/**
 * Class CoinHistoricalsTableSeeder.
 */
class CoinHistoricalsTableSeeder extends Seeder
{
    /**
     * @param int    $coinId
     * @param float  $priceUsd
     * @param Carbon $snapshotAt
     */
    private function createCoinHistorical(int $coinId, float $priceUsd, Carbon $snapshotAt)
    {
        CoinHistorical::create([
            'coin_id'     => $coinId,
            'price_usd'   => $priceUsd,
            'snapshot_at' => $snapshotAt,
        ]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->line('');
        $this->command->info('####################################################');
        $this->command->info('## Running Seed 4/4 ################################');
        $this->command->info('####################################################');
        $this->command->line('');

        $this->command->info('This command may take several hours to complete. If you want to stop the execution press "control + c".');
        $this->command->warn('Warning: If you cancel it very quickly, probably only have historicals of coin id 1');

        $coins = Coin::all();

        $coins->each(function ($item, $key) {
            $priceUsd = $item->price_usd;
            $snapshotAt = $item->created_at;

            $this->command->info('Creating coinHistoricals for coin id '.$item->id.'...');

            $this->createCoinHistorical($item->id, $priceUsd, $snapshotAt);

            $dtEnd = $item->created_at->subMonths(6);
            $nextPrice = $priceUsd;
            do {
                // Creating fake records every hour.
                $nextSnapshotAt = $snapshotAt->subHour();

                // This calc the coin price variation.
                $nextPriceUsdVariation = (rand(-100, 100) / 10000) * $priceUsd;

                // And finally we plus the nextPrice with newPriceUsdVariation
                $nextPrice += $nextPriceUsdVariation;

                $this->createCoinHistorical($item->id, $nextPrice, $nextSnapshotAt);
            } while ($nextSnapshotAt->gte($dtEnd)); // While the snapshot date not reach final date.
        });
    }
}
