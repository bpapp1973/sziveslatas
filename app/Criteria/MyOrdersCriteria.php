<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use Auth;

/**
 * Class MyOrdersCriteria
 * @package namespace App\Criteria;
 */
class MyOrdersCriteria implements CriteriaInterface
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
        if(Auth::user()->roles_id==1) {
            //
        }
        elseif(Auth::user()->roles_id==2) {
            $model = $model->where('companies_id','=', Auth::user()->companies->first()->id );
        }
        elseif (Auth::user()->roles_id>=3) {
            $model = $model->where('companies_id','=', Auth::user()->companies->first()->id );
        }
        return $model;
    }
}
