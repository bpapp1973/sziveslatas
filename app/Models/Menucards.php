<?php

namespace App\Models;

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
        'id' => 'integer',
        'ads_id' => 'integer',
        'label' => 'string',
        'title' => 'string',
        'subtitle' => 'string',
        'price' => 'integer',
        'pricedesc' => 'string',
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
