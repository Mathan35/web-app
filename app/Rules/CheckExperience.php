<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckExperience implements ValidationRule
{

    protected $startDate;

    public function __construct($startDate)
    {
        $this->startDate = $startDate;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->startDate >= $value) {
            $fail('Please select the valid experience');
        }
    }
}
