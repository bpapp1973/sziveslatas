<?php

namespace App\Repositories;

use App\Models\Rooms;
use InfyOm\Generator\Common\BaseRepository;

class RoomsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ads_id',
        'name',
        'area',
        'seats',
        'assets',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Rooms::class;
    }
}
