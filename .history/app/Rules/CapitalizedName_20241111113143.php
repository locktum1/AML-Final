<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CapitalizedName implements Rule
{
    public function validate(string $attribute, mixed $value)
    {
        //
    }
}
