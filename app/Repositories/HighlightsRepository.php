<?php

namespace App\Repositories;

use App\Models\Highlights;
use InfyOm\Generator\Common\BaseRepository;

class HighlightsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'location',
        'sequence_id',
        'ads_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Highlights::class;
    }
}
