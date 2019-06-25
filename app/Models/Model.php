<?php

namespace Nautic\Models;

use Nautic\Models\Entity as Entity;

class Model extends Entity
{
    public $table = 'models';

    public $fillable = ['name','slug'];



    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];
}