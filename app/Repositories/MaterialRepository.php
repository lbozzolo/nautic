<?php

namespace Nautic\Repositories;

use Nautic\Models\Material;
use InfyOm\Generator\Common\BaseRepository;

class MaterialRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Material::class;
    }
}
