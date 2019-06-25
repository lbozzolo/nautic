<?php

namespace Nautic\Models;

use Nautic\Models\Entity as Entity;

class Type extends Entity
{
    public $table = 'types';

    public $fillable = ['name','slug'];



    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required'
    ];
}