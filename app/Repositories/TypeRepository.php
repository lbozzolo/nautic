<?php

namespace Nautic\Repositories;

use Nautic\Models\Type;
use InfyOm\Generator\Common\BaseRepository;

class TypeRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Type::class;
    }
}
