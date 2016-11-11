<?php

namespace App\Repositories;

use App\Models\Cities;
use InfyOm\Generator\Common\BaseRepository;

class CitiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'counties_id',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cities::class;
    }
}
