<?php

namespace Nautic\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Nautic\Models\Category;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return Category::$rules;
    }
}
