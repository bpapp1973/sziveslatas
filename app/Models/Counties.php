<?php

namespace App\Models;

use App\Traits\NullableFields;
use Illuminate\Database\Eloquent\Model;

class Counties extends Model
{
    /**
     * Get the cities in the county.
     */
    public function cities()
    {
        return $this->hasMany('App\Models\Cities', 'counties_id');
    }
}
