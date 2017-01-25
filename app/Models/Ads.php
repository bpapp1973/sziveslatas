<?php

namespace App\Models;

use App\Traits\NullableFields;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ads
 * @package App\Models
 * @version October 18, 2016, 10:47 pm CEST
 */
class Ads extends Model
{
    use SoftDeletes;

    public $table = 'ads';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'highlighted',
        'isvalid',
        'title',
        'website',
        'companies_id',
        'categories_id',
        'tags',
        'cities_id',
        'address',
        'responsible',
        'phone',
        'email',
        'description',
        'price',
        'discountprice',
        'visitors',
        'startdate',
        'enddate',
        'ticket_url',
        'expireson',
        'created_by',
        'updated_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'website' => 'string',
        'companies_id' => 'integer',
        'categories_id' => 'integer',
        'tags' => 'string',
        'cities_id' => 'integer',
        'responsible' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'description' => 'string',
        'price' => 'integer',
        'discountprice' => 'integer',
        'visitors' => 'integer',
        'startdate' => 'date',
        'enddate' => 'date',
        'ticket_url' => 'string',
        'expireson' => 'date',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title'           => 'required|max:255',
        'website'         => 'max:255',
        'responsible'     => 'max:255',
        'phone'           => 'max:255',
        'email'           => 'max:255',
        'description'     => 'required',
        'price'           => 'integer|required',
        'discountprice'   => 'integer',
        'visitors'        => 'integer',
        'startdate'       => 'date',
        'enddate'         => 'date',
        'ticket_url'      => 'max:1024',
        'expireson'       => 'date'
    ];


    protected $nullable = ['visitors',
                           'discountprice'];

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
     * Get the city of the ad.
     */

    public function city()
    {
        return $this->belongsTo('App\Models\Cities', 'cities_id');
    }

    /**
     * Get the company of the ad.
     */
    public function company()
    {
        return $this->belongsTo('App\Models\Companies', 'companies_id');
    }

    /**
     * Get the category of the ad.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Categories', 'categories_id');
    }

    /**
     * Get the creator of the ad.
     */
    public function createdby()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    /**
     * Get the last updater of the ad.
     */
    public function updatedby()
    {
        return $this->belongsTo('App\User', 'updated_by');
    }

    /**
     * Get the tags records associated with the ad.
     */
    public function tag()
    {
        return $this->hasMany('App\Models\Tags', 'container_id');
    }

    /**
     * Get the tags records associated with the ad.
     */
    public function images()
    {
        return $this->hasMany('App\Models\Images', 'container_id');
    }

    /**
     * Get the rooms records associated with the ad.
     */
    public function rooms()
    {
        return $this->hasMany('App\Models\Rooms', 'ads_id');
    }

    /**
     * Get the menucards records associated with the ad.
     */
    public function menucards()
    {
        return $this->hasMany('App\Models\Menucards', 'ads_id');
    }

    /**
     * Get the comments records associated with the ad.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comments', 'ads_id');
    }

    /**
     * Get the orders records associated with the ad.
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Orders', 'ads_id');
    }

    
}
