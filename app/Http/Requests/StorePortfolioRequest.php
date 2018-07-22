<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'coin_id'   => 'required|exists:coins,id',
            'amount'    => 'required|numeric',
            'price_usd' => 'required|numeric|min:0',
            'traded_at' => 'required|before:'.date('2018-05-03T09:14:39+00:00'),
        ];
    }
}
