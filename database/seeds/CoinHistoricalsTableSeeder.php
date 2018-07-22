<?php

use App\CoinHistorical;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

/**
 * Class CoinHistoricalsTableSeeder
 */
class CoinHistoricalsTableSeeder extends Seeder
{
    /**
     * @param int $coinId
     * @param float $priceUsd
     * @param Carbon $snapshotAt
     */
    private function createCoinHistorical(int $coinId, float $priceUsd, Carbon $snapshotAt)
    {
        CoinHistorical::create([
            'coin_id' => $coinId,
            'price_usd' => $priceUsd,
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
        DB::transaction(function() {
            $coins = \App\Coin::all();

            $coins->each(function ($item, $key) {
                $priceUsd = $item->price_usd;
                $snapshotAt = $item->created_at;
                $this->createCoinHistorical($item->id, $priceUsd, $snapshotAt);

                $dtEnd = $item->created_at->subMonths(6);
                $nextPrice = $priceUsd;
                do {
                    $nextSnapshotAt = $snapshotAt->subHour();

                    $nextPriceUsdVariation = (rand(-100, 100) / 10000) * $priceUsd;
                    $nextPrice += $nextPriceUsdVariation;

                    $this->createCoinHistorical($item->id, $nextPrice, $nextSnapshotAt);

                } while ($nextSnapshotAt->gte($dtEnd));

            });
        });
    }
}
