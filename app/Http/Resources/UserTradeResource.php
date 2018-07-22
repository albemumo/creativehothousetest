<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserTradeResource extends JsonResource
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
            'trade' => [
                'id'         => $this->id,
                'coin_id'    => $this->coin_id,
                'amount'     => $this->amount,
                'price_usd'  => $this->price_usd,
                'notes'      => $this->notes,
                'traded_at'  => $this->traded_at,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
        ];
    }
}
