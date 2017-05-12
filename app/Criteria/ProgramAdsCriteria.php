<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

use App\Models\Categories;

/**
 * Class ProgramAdsCriteria
 * @package namespace App\Criteria;
 */
class ProgramAdsCriteria implements CriteriaInterface
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
        $programs = Categories::where('parent_id',4)->get(['id']);
        $model = $model->whereIn('categories_id', $programs );
        return $model;
    }
}
