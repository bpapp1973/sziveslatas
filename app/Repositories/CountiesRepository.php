<?php

namespace App\Repositories;

use App\Models\Counties;
use InfyOm\Generator\Common\BaseRepository;

class CountiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Counties::class;
    }
}
