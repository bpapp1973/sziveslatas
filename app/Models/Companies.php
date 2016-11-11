<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Companies
 * @package App\Models
 * @version October 18, 2016, 10:46 pm CEST
 */
class Companies extends Model
{
    use SoftDeletes;

    public $table = 'companies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'title',
        'logo',
        'email',
        'tax_id',
        'categories_id',
        'subscriptiontype',
        'payment',
        'cities_id',
        'address',
        'contact',
        'phone',
        'website',
        'licence',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'title' => 'string',
        'logo' => 'string',
        'email' => 'string',
        'tax_id' => 'string',
        'categories_id' => 'integer',
        'cities_id' => 'integer',
        'address' => 'string',
        'contact' => 'string',
        'phone' => 'string',
        'website' => 'string',
        'licence' => 'date',
        'description' => 'string'
    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $createRules = [
            'name'              => 'required|max:255|unique:companies',
            'title'             => 'max:255',
            'email'             => 'required|email|max:255|unique:companies',
            'tax_id'            => 'taxid|unique:companies',
            'category'          => 'required|max:10000',
            'subscriptiontype'  => 'required|max:10000',
            'payment'           => 'required|max:10000',
            'city'              => 'required|max:10000',
            'address'           => 'required|max:255',
            'contact'           => 'required|max:255',
            'phone'             => 'required|max:255',
            'website'           => 'max:255',
            'licence'           => 'required|max:255',
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $updateRules = [
            'category'          => 'required|max:10000',
            'subscriptiontype'  => 'required|max:10000',
            'payment'           => 'required|max:10000',
            'city'              => 'required|max:10000',
            'address'           => 'required|max:255',
            'contact'           => 'required|max:255',
            'phone'             => 'required|max:255',
            'website'           => 'max:255',
            'licence'           => 'required|max:255',
    ];

    /**
     * Get the city where the company is located.
     */
    public function city()
    {
        return $this->belongsTo('App\Models\Cities', 'cities_id');
    }

    /**
     * Get the category of the company.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Categories', 'categories_id');
    }

    /**
     * Get the company records associated with the user.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_companies', 'companies_id', 'users_id' );
    }

    /**
     * Get the tags records associated with the user.
     */
    public function tags()
    {
        return $this->hasMany('App\Models\Tags', 'container_id');
    }

    /**
     * Get the images records associated with the user.
     */
    public function images()
    {
        return $this->hasMany('App\Models\Images', 'container_id');
    }

}
