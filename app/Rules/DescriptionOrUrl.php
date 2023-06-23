<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DescriptionOrUrl implements ValidationRule
{
    protected $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
       if(!$this->content && !$value) {
            $fail('You must need to enter content or Description url');
       }
    }
}
