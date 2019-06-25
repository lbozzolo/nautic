<?php

namespace Nautic\Models;

use Nautic\Models\Entity as Entity;

class Fueltype extends Entity
{
    public $table = 'fueltypes';

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