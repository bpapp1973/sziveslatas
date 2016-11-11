<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lists
 * @package App\Models
 * @version October 18, 2016, 10:44 pm CEST
 */
class Lists extends Model
{
    use SoftDeletes;

    public $table = 'lists';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'form',
        'control',
        'seqid',
        'value',
        'isenabled'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'form' => 'string',
        'control' => 'string',
        'seqid' => 'integer',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
