<?php

namespace App\Repositories;

use App\Models\Images;
use InfyOm\Generator\Common\BaseRepository;

class ImagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'filepath',
        'container_type',
        'container_id',
        'form',
        'control_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Images::class;
    }
}
