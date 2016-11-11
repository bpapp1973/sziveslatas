<?php

namespace App\Repositories;

use App\Models\Calendars;
use InfyOm\Generator\Common\BaseRepository;

class CalendarsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ads_id',
        'startdate',
        'enddate',
        'isavailable'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Calendars::class;
    }
}
