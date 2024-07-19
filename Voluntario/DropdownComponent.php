<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Livewire\Component;
use Livewire\WithPagination;


class DropdownComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $model, $columnName, $columnId, $titulo, $columns,$value,$label,$tableAction;
    public $selected;
    public $search = '';
    public $color;
    public $title;
    public $data = [];

    public function mount($color, $columnName, $columnId, $titulo, $model, $value){
   
        //dd($columnName,$columnId,$title,$model,$label,$value);
        $this->columnName = $columnName;
        $this->columnId = $columnId;
        $this->titulo = $titulo;
        $this->value = $value;
        $this->model = $model;
        $this->color = $color;
        $this->title = $titulo ;  

        if($value > 0){

            $data = app($this->model)::find($value);
            $this->data = $data ? $data : [];
            $this->title = $data ? $data[$columnName] : 'Selecione'.$titulo ;         
        }
      
        // $this->label = $label;
        // $this->selected = $value;
    }

    public function render()
    {
        $this->columns = app($this->model)::where('status', true)->get();
        
        return view('livewire.admin.sesau.voluntario.dropdown-component',[
            'colunas' => app($this->model)::query()
                ->when($this->search, function ($query){
                    $query->where($this->columnName, 'like', "%{$this->search}%");})->paginate(5),
            // 'colunas'=> app($this->model)::paginate(1),
        ]);
    }

    public function updatedSelected($value){
        $array = json_decode($value, true);
        $this->emit('selectedColumn', $array[$this->columnId], $this->label);
        $this->titulo = $array[$this->columnName]; 
        $this->title = $array[$this->columnName]; 
    }

    public function updatedSearch($search){
        $this->search = $search;
        $this->render();

    }

    // public function updatedTitulo($value){
    //     // dd($value);
    //     $this->emit('selectedTitulo', $value, $this->label);
    // }
}
