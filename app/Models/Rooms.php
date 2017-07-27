<?php

namespace App\Models;

use App\Traits\NullableFields;
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
        'id',
        'ads_id',
        'name',
        'area',
        'seats',
        'assets',
        'price',
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
        'seats' => 'integer',
        'assets' => 'string',
        'price' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    protected $nullable = ['area',
                           'seats',
                           'assets',
                           'price',
                           'description'
    ];

    public static function boot()
    {
        parent::boot();
        static::saving(function($model) {
            $model->beforeSave();
        });
    }
    /**
     * Set empty nullable fields to null
     */
    public function beforeSave()
    {
        foreach ($this->attributes as $key => &$value) {
            if (in_array($key, $this->nullable)) {
                empty($value) and $value = null;
            }
        } 
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ad()
    {
        return $this->belongsTo(\App\Models\Ads::class);
    }
}
