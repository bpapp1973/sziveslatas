<?php

namespace App\Models;

use App\Traits\NullableFields;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Orders
 * @package App\Models
 * @version January 11, 2017, 10:02 pm CET
 */
class Orders extends Model
{
    use SoftDeletes;
    use NullableFields;

    public $table = 'orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'companies_id',
        'ads_id',
        'menucards_id',
        'rooms_id',
        'eventtype',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'companies_id' => 'integer',
        'ads_id' => 'integer',
        'menucards_id' => 'integer',
        'rooms_id' => 'integer',
        'eventtype' => 'string',
        'guests' => 'integer',
        'personnel' => 'integer',
        'users_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function setMenucardsIdAttribute($menucards_id)
    {
        $this->attributes['menucards_id'] = $this->nullIfEmpty($menucards_id);
    }

    public function setRoomsIdAttribute($rooms_id)
    {
        $this->attributes['rooms_id'] = $this->nullIfEmpty($rooms_id);
    }

    public function setGuestsAttribute($guests)
    {
        $this->attributes['guests'] = $this->nullIfEmpty($guests);
    }

    public function setPersonnelAttribute($personnel)
    {
        $this->attributes['personnel'] = $this->nullIfEmpty($personnel);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ad()
    {
        return $this->belongsTo(\App\Models\Ads::class, 'ads_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'users_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function menucard()
    {
        return $this->belongsTo(\App\Models\Menucards::class, 'menucards_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function room()
    {
        return $this->belongsTo(\App\Models\Rooms::class, 'rooms_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function company()
    {
        return $this->belongsTo(\App\Models\Companies::class, 'companies_id');
    }
}
