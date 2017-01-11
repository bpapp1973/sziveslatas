<?php

namespace App\Models;

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

    public $table = 'orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ad()
    {
        return $this->belongsTo(\App\Models\Ads::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function menucard()
    {
        return $this->belongsTo(\App\Models\Menucards::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function room()
    {
        return $this->belongsTo(\App\Models\Rooms::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function company()
    {
        return $this->belongsTo(\App\Models\Companies::class);
    }
}
