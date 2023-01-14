<?php

namespace App\Http\Requests;

use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Foundation\Http\FormRequest;

class ReservationStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            'first_name'=>['required'],
            'last_name'=>['required'],
            'tel_number'=>['required'],
            'email'=>['required'],
            'res_date'=>['required',new DateBetween,new TimeBetween],
            
            'guest_number'=>['required'],
           
            'table_id'=>['required'],
        ];
    }
}
