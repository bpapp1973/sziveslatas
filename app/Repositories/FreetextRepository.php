<?php

namespace App\Repositories;

use App\Models\Freetext;
use InfyOm\Generator\Common\BaseRepository;

class FreetextRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'text'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Freetext::class;
    }
}
