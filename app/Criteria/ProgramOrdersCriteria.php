<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

use App\Models\Ads;

/**
 * Class ProgramOrdersCriteria
 * @package namespace App\Criteria;
 */
class ProgramOrdersCriteria implements CriteriaInterface
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
        $ads = Ads::with('category')->where(function($q) {
            $q->whereHas('category', function($cq) {
                $cq->where('parent_id', 4);
            });
        })->get(['id']);

        $model = $model->whereIn('ads_id', $ads );
        return $model;
    }
}
