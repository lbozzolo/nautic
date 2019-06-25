<?php

namespace Nautic\Models;

use Nautic\Models\Entity as Entity;

class Producer extends Entity
{
    public $table = 'producers';

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