<?php

namespace Nautic\Repositories;

use Nautic\Models\Shipyard;
use InfyOm\Generator\Common\BaseRepository;

class ShipyardRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Shipyard::class;
    }
}
