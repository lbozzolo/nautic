<?php

namespace Nautic\Models;

use Nautic\Models\Entity as Entity;

class Material extends Entity
{
    public $table = 'materials';

    public $fillable = ['name'];



    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];
}