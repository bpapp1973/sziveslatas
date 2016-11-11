<?php

namespace App\Repositories;

use App\Models\Lists;
use InfyOm\Generator\Common\BaseRepository;

class ListsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'form',
        'control',
        'seqid',
        'value',
        'isenabled'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lists::class;
    }
}
