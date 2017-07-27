<?php

namespace App\Models;

use App\Traits\NullableFields;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Menucards
 * @package App\Models
 * @version November 27, 2016, 9:48 pm CET
 */
class Menucards extends Model
{
    use SoftDeletes;
    use NullableFields;

    public $table = 'menucards';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'ads_id',
        'label',
        'title',
        'subtitle',
        'price',
        'pricedesc',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        'ads_id'      => 'int',
        'label'       => 'string',
        'title'       => 'string',
        'subtitle'    => 'string',
        'price'       => 'int',
        'pricedesc'   => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'label'       => 'max:45',
        'title'       => 'max:45',
        'subtitle'    => 'max:128',
        'pricedesc'   => 'max:128'
    ];

    protected $nullable = ['label',
                           'title',
                           'subtitle',
                           'pricedesc'
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

    public function setPriceAttribute($price)
    {
        $this->attributes['price'] = $this->nullIfEmpty($price);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ad()
    {
        return $this->belongsTo(\App\Models\Ads::class);
    }
    
}
