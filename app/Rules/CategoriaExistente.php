<?php

namespace App\Rules;

use App\Category;
use Illuminate\Contracts\Validation\Rule;

class CategoriaExistente implements Rule
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
        $registro = Category::where('name',$value)->first();

        if($registro == null){
            return $value;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Esta categoria ya fue registrada, intente con otra.';
    }
}
