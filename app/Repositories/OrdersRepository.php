<?php

namespace App\Repositories;

use App\Models\Orders;
use InfyOm\Generator\Common\BaseRepository;

class OrdersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'companies_id',
        'ads_id',
        'menucards_id',
        'rooms_id',
        'startdate',
        'enddate',
        'guests',
        'personnel',
        'users_id',
        'first_name',
        'last_name',
        'email',
        'phone'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Orders::class;
    }
}
