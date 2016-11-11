<?php

namespace App\DataTables;

use App\Models\Ads;
use Form;
use Yajra\Datatables\Services\DataTable;

class AdsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'models.ads.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $ads = Ads::query();

        return $this->applyScopes($ads);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'isvalid' => ['name' => 'isvalid', 'data' => 'isvalid'],
            'title' => ['name' => 'title', 'data' => 'title'],
            'companies_id' => ['name' => 'companies_id', 'data' => 'companies_id'],
            'categories_id' => ['name' => 'categories_id', 'data' => 'categories_id'],
            'tags' => ['name' => 'tags', 'data' => 'tags'],
            'cities_id' => ['name' => 'cities_id', 'data' => 'cities_id'],
            'responsible' => ['name' => 'responsible', 'data' => 'responsible'],
            'phone' => ['name' => 'phone', 'data' => 'phone'],
            'email' => ['name' => 'email', 'data' => 'email'],
            'description' => ['name' => 'description', 'data' => 'description'],
            'price' => ['name' => 'price', 'data' => 'price'],
            'visitors' => ['name' => 'visitors', 'data' => 'visitors'],
            'expireson' => ['name' => 'expireson', 'data' => 'expireson'],
            'created_by' => ['name' => 'created_by', 'data' => 'created_by'],
            'updated_by' => ['name' => 'updated_by', 'data' => 'updated_by']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ads';
    }
}
