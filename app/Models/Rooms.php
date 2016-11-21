<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rooms
 * @package App\Models
 * @version November 20, 2016, 11:25 am CET
 */
class Rooms extends Model
{
    use SoftDeletes;

    public $table = 'rooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'ads_id',
        'name',
        'area',
        'seats',
        'assets',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ads_id' => 'integer',
        'name' => 'string',
        'area' => 'integer',
        'seats' => 'integer',
        'assets' => 'string',
        'description' => 'string'
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
}