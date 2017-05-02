<?php

namespace App\Models;

use App\Traits\NullableFields;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categories
 * @package App\Models
 * @version October 18, 2016, 10:45 pm CEST
 */
class Categories extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'parent_id',
        'name',
        'isenabled'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parent_id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    protected $nullable = ['parent_id'];

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
     * Get the parent.
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\Categories', 'parent_id');
    }

     
}
