<?php

namespace Nautic\Repositories;

use Nautic\Models\Image;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ImageRepository
 * @package Nautic\Repositories
 * @version September 3, 2018, 10:53 pm UTC
 *
 * @method Image findWithoutFail($id, $columns = ['*'])
 * @method Image find($id, $columns = ['*'])
 * @method Image first($columns = ['*'])
*/
class ImageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Image::class;
    }

}
