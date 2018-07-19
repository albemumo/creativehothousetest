<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

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
            'coin_id' => 'required|exists:coins,id',
            'amount' => 'required|numeric',
            'price_usd' => 'required|numeric|min:0',
            'traded_at' => 'required|before:' . date('2018-05-03T09:14:39+00:00'),
        ];
    }

    public function response(array $errors)
    {
        exit;
        // Optionally, send a custom response on authorize failure
        // (default is to just redirect to initial page with errors)
        //
        // Can return a response, a view, a redirect, or whatever else

        if ($this->ajax() || $this->wantsJson())
        {
            return new JsonResponse($errors, 422);
        }
//        return $this->redirector->to('login')
//            ->withInput($this->except($this->dontFlash))
//            ->withErrors($errors, $this->errorBag);
    }
}
