<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;


class IsbnValidationRule implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^\d{10,13}$/', $value);
    }

    public function message()
    {
        return 'The ISBN is not valid.';
    }
}





