<?php

namespace App\Repositories;

use App\Models\Favourites;
use InfyOm\Generator\Common\BaseRepository;

class FavouritesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'users_id',
        'ads_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Favourites::class;
    }
}
