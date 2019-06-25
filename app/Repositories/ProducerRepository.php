<?php

namespace Nautic\Repositories;

use Nautic\Models\Producer;
use InfyOm\Generator\Common\BaseRepository;

class ProducerRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Producer::class;
    }
}
