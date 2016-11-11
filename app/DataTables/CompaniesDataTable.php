<?php

namespace App\DataTables;

use App\Models\Companies;
use Form;
use Yajra\Datatables\Services\DataTable;

class CompaniesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'models.companies.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $companies = Companies::query();

        return $this->applyScopes($companies);
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
            'name' => ['name' => 'name', 'data' => 'name'],
            'title' => ['name' => 'title', 'data' => 'title'],
            'logo' => ['name' => 'logo', 'data' => 'logo'],
            'email' => ['name' => 'email', 'data' => 'email'],
            'tax_id' => ['name' => 'tax_id', 'data' => 'tax_id'],
            'categories_id' => ['name' => 'categories_id', 'data' => 'categories_id'],
            'subscriptiontype' => ['name' => 'subscriptiontype', 'data' => 'subscriptiontype'],
            'payment' => ['name' => 'payment', 'data' => 'payment'],
            'cities_id' => ['name' => 'cities_id', 'data' => 'cities_id'],
            'address' => ['name' => 'address', 'data' => 'address'],
            'contact' => ['name' => 'contact', 'data' => 'contact'],
            'phone' => ['name' => 'phone', 'data' => 'phone'],
            'website' => ['name' => 'website', 'data' => 'website'],
            'licence' => ['name' => 'licence', 'data' => 'licence'],
            'description' => ['name' => 'description', 'data' => 'description']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'companies';
    }
}
