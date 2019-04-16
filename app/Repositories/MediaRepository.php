<?php

namespace Nautic\Repositories;

use Nautic\Models\Media;
use InfyOm\Generator\Common\BaseRepository;

class MediaRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Media::class;
    }
}
