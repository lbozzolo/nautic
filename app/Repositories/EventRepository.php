<?php

namespace Nautic\Repositories;

use Nautic\Models\Event;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EventRepository
 * @package Nautic\Repositories
 * @version September 3, 2018, 10:38 pm UTC
 *
 * @method Work findWithoutFail($id, $columns = ['*'])
 * @method Work find($id, $columns = ['*'])
 * @method Work first($columns = ['*'])
*/
class EventRepository extends BaseRepository
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
        return Event::class;
    }
}
