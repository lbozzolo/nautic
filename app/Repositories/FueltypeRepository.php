<?php

namespace Nautic\Repositories;

use Nautic\Models\Fueltype;
use InfyOm\Generator\Common\BaseRepository;

class FueltypeRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Fueltype::class;
    }
}
