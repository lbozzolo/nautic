<?php

namespace Nautic\Repositories;

use Nautic\Models\Model;
use InfyOm\Generator\Common\BaseRepository;

class ModelRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Model::class;
    }
}
