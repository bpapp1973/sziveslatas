<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrderDetails
 * @package App\Models
 * @version December 26, 2016, 6:45 pm CET
 */
class OrderDetails extends Model
{
    use SoftDeletes;

    public $table = 'order_details';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'orders_id',
        'ads_id',
        'startdate',
        'enddate',
        'menu_id',
        'guests'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'orders_id' => 'integer',
        'ads_id' => 'integer',
        'menu_id' => 'integer',
        'guests' => 'integer'
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
        return $this->belongsTo(\App\Models\Ad::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function menucard()
    {
        return $this->belongsTo(\App\Models\Menucard::class);
    }
}
