<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Livewire\Component;

class TipoComponent extends Component
{
    public $data = [];
    public $tipo;
    public $modal, $form, $title, $model,$tableAction;
    public $tipoId;
    public $checkbox_attribute = 'id';
    public $checkbox_values = [];

    public function mount( $modal, $title, $model, $form)
    {
        $this->modal = $modal;
        $this->title = $title;
        $this->model = $model;
        $this->form = $form;
    }

    // protected $listeners = ['deleteListener' => 'delete'];

    public function render()
    {

        $tipos = $this->model::all();

        return view('livewire.admin.sesau.voluntario.tipo-component', compact('tipos'));
    }


    public function edit($id)
    {
        $data = app($this->model)::findOrFail($id);
        dd($data->attributes());
        $this->data = $data;
    }


    public function store()
    {


        $this->validate(app($this->model)->rules);


        try {
            // dd($this->data);
            $this->model::create($this->data);
            $this->resetFields();
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message', 'Não foi possível cadastrar informação.');
        }

        session()->flash('message', 'Registro cadastrado com sucesso.');
    }



    public function update()
    {
        $this->validate(app($this->model)->rules);
        try {
            app($this->model)::whereId($this->data['id'])->update($this->data);
            session()->flash('success', 'Atualizado com sucesso!!');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('success', 'Algo deu errado!!');
        }
    }

    public function destroy($id)
    {
        try {
            $item = $this->model::find($id);
            $item ? $item->delete() : false;
            session()->flash('success', " Deleted Successfully!!");
        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong while deleting category!!");
        }
    }

    private function resetFields()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->data = [];
    }
}
