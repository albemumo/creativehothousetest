<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoinResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'coin' => [
                'id'                 => $this->id,
                'name'               => $this->name,
                'symbol'             => $this->symbol,
                'logo'               => $this->logo,
                'rank'               => $this->rank,
                'price_usd'          => $this->price_usd,
                'price_btc'          => $this->price_btc,
                'market_cap_usd'     => $this->market_cap_usd,
                'available_supply'   => $this->available_supply,
                'total_supply'       => $this->total_supply,
                'percent_change_1h'  => $this->percent_change_1h,
                'percent_change_24h' => $this->percent_change_24h,
                'percent_change_7d'  => $this->percent_change_7d,
                'created_at'         => $this->created_at,
                'updated_at'         => $this->updated_at,
            ],
        ];
    }
}
