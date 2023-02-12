<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class TextLength implements Rule
{
    protected $count;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($count = 2)
    {
        $this->count = $count;
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
        return str_word_count($value) >= 2;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'required 2 or more words';
    }
}
