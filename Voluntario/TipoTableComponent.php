<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Faker\Guesser\Name;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;
use Livewire\WithPagination;


class TipoTableComponent extends TableComponent
{
    public $modalId, $modal, $model, $form, $title, $namespace;
    public $checkbox = false;
    public $per_page = 5;
    public $data = [];
    public $modelId;
    public $model_id;
    public $tableAction = true;


    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $header_view = 'livewire.admin.sesau.voluntario.tipo.table.header';

    protected $listeners = [
        'editListener' => 'edit',
        'deleteListener' => 'delete',
        'refreshTipoTableComponent' => '$refresh'
    ];

    public function query()
    {
        $this->modalId = $this->modal;
        $this->namespace = $this->model;
        return $this->namespace::query();
    }

    public function tableAction(){
        $this->tableAction = false;
    }

    public function columns()
    {
        if (method_exists($this->model, 'columns')) {
            return app($this->model)::columns();
        } else {
            return [
                Column::make('ID')->searchable()->sortable(),
            ];
        }
    }
    

}
