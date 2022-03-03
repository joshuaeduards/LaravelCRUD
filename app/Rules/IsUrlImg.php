<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsUrlImg implements Rule
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
        $imgs = ["png", "jpeg", "jpg"];
        $strArray = explode('.',$value);
        $lastElement = end($strArray);
        foreach($imgs as $img){
            return $lastElement === $img ? true : false; 
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be valid.';
    }
}
