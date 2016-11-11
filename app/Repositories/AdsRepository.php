<?php

namespace App\Repositories;

use App\Models\Ads;
use InfyOm\Generator\Common\BaseRepository;

class AdsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'isvalid',
        'title',
        'companies_id',
        'categories_id',
        'tags',
        'cities_id',
        'responsible',
        'phone',
        'email',
        'description',
        'price',
        'discountprice',
        'visitors',
        'expireson',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ads::class;
    }
}
