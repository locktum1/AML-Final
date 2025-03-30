<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CapitalizedName implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $words = explode('',$value);

        foreach ($words as $word){
            if (!ctype_upper(mb_substr($word,0,1)) || !ctype_lower(mb_substr($word)))
        }
    }
}
