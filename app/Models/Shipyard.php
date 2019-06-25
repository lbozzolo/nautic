<?php

namespace Nautic\Models;

use Nautic\Models\Entity as Entity;

class Shipyard extends Entity
{
    public $table = 'shipyards';

    public $fillable = ['name','city','lat','long'];



    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];
}