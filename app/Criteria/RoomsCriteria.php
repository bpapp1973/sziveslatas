<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use Auth;

/**
 * Class RoomsCriteria
 * @package namespace App\Criteria;
 */
class RoomsCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        if (Auth::user()->roles_id==4) {
            return $model;
        } else {
            $model = $model->where('ads_id','=', 11 );
            return $model;
        }
    }
}
