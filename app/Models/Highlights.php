<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Highlights
 * @package App\Models
 * @version February 19, 2017, 1:45 pm CET
 */
class Highlights extends Model
{
    use SoftDeletes;

    public $table = 'highlights';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'location',
        'sequence_id',
        'ads_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'string',
        'sequence_id' => 'integer',
        'ads_id' => 'integer'
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
        return $this->belongsTo('App\Models\Ads', 'ads_id');
    }
}
