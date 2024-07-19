<?php

namespace App\Http\Livewire\Admin\Crud;

use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class CrudTableComponent extends TableComponent
{
    public $per_page = 5;
    public $checkbox = false;
    protected $paginationTheme = 'bootstrap';
    public $header_view = 'livewire.admin.crud.table.header';
    // public $footer_view = 'livewire.admin.crud.table.footer';

    public $model, $form, $title, $modalId, $formType, $modal, $key, $tableAction;

    protected $listeners = [
        'refreshCrudTable' => '$refresh'
    ];
    
    public function query()
    {
        return $this->model::query();
    }

    public function columns()
    {
        if (method_exists($this->model, 'columns')) {
            return (new $this->model)->columns();
        } else {
            return [
                Column::make('ID')->searchable()->sortable(),
            ];
        }
    }

    public function export()
    {
        return redirect()->route('instituicao.export');
    }
}
