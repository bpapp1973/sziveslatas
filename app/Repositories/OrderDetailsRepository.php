<?php

namespace App\Repositories;

use App\Models\OrderDetails;
use InfyOm\Generator\Common\BaseRepository;

class OrderDetailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'orders_id',
        'ads_id',
        'startdate',
        'enddate',
        'menu_id',
        'guests',
        'personnel'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrderDetails::class;
    }
}
