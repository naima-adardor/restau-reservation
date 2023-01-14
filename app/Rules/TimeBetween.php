<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class TimeBetween implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $pickupDate=Carbon::parse($value);
        $pickupTime=Carbon::createFromTime($pickupDate->hour,$pickupDate->minute,$pickupDate->second);
        //when the restau is open
        $earliestTime=Carbon::createFromTime(17,00,00);
        $lastTime=Carbon::createFromTime(23,00,00);
        return $pickupTime->between($earliestTime,$lastTime) ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please choose the time between 17:00:00 and 23:00:00.';
    }
}
