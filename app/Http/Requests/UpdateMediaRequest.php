<?php

namespace Nautic\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Nautic\Models\Media;

class UpdateMediaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return Media::$rules;
    }
}
