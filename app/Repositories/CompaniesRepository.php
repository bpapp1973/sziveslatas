<?php

namespace App\Repositories;

use App\Models\Companies;
use InfyOm\Generator\Common\BaseRepository;

class CompaniesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'title',
        'logo',
        'email',
        'tax_id',
        'categories_id',
        'subscriptiontype',
        'payment',
        'cities_id',
        'address',
        'contact',
        'phone',
        'website',
        'licence',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Companies::class;
    }
}
