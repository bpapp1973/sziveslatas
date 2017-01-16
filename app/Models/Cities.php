<?php

namespace App\Models;

use App\Traits\NullableFields;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    /**
     * Get the county that contains the city.
     */
    public function county()
    {
        return $this->belongsTo('App\Models\Counties', 'counties_id');
    }

    /**
     * Get the users in the city.
     */
    public function users()
    {
        return $this->hasMany('App\User', 'cities_id');
    }

    /**
     * Get the companies in the city.
     */
    public function companies()
    {
        return $this->hasMany('App\Models\Companies', 'cities_id');
    }
    
    /**
     * Get the advertisementes in the city.
     */
    public function ads()
    {
        return $this->hasMany('App\Models\Ads', 'cities_id');
    }
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';
}
