<?php

namespace App\Repositories;

use App\Models\Tags;
use InfyOm\Generator\Common\BaseRepository;

class TagsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'container_type',
        'container_id',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tags::class;
    }
}
