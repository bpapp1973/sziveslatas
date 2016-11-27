<?php

namespace App\Repositories;

use App\Models\Menucards;
use InfyOm\Generator\Common\BaseRepository;

class MenucardsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ads_id',
        'label',
        'title',
        'subtitle',
        'price',
        'pricedesc',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Menucards::class;
    }
}
