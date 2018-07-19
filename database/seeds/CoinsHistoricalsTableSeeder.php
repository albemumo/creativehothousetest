<?php

use App\CoinHistorical;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CoinsHistoricalsTableSeeder extends Seeder
{
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
        $coins = \App\Coin::all();

        $coins->each(function ($item, $key) {
            $priceUsd = $item->price_usd;
            $snapshotAt = $item->created_at;
            $this->createCoinHistorical($item->id, $priceUsd, $snapshotAt);
//            CoinHistorical::create([
//                'coin_id' => $item->id,
//                'price_usd' => $priceUsd,
//                'snapshot_at' => $snapshotAt,
//            ]);

            $dtEnd = $item->created_at->subMonths(6);
            $nextPrice = $priceUsd;
            do {
                $nextSnapshotAt = $snapshotAt->subHour();

                $nextPriceUsdVariation = (rand(-100, 100) / 10000) * $priceUsd;
                $nextPrice += $nextPriceUsdVariation;

                $this->createCoinHistorical($item->id, $nextPrice, $nextSnapshotAt);

//                CoinHistorical::create([
//                    'coin_id' => $item->id,
//                    'price_usd' => $nextPrice,
//                    'snapshot_at' => $nextSnapshotAt,
//                ]);

            } while ($nextSnapshotAt->gte($dtEnd));

        });
    }
}
