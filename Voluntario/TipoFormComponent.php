<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Livewire\Component;

class TipoFormComponent extends Component
{
    public $data = [];
    public $modal, $form, $title, $namespace,$tableAction;
    public $type;

    public $listeners = ['editTipoFormComponent', 'deleteTipoFormComponent'];

    public function mount($modal, $title, $form, $namespace)
    {
        $this->modal = $modal;
        $this->title = $title;
        $this->form = $form;
        $this->namespace = $namespace;
    }
    public function render()
    {
        return view('livewire.admin.sesau.voluntario.tipo-form-component');
    }

    public function editTipoFormComponent($data)
    {
        $this->data = $data;
        $this->type = 'update';
        // app($this->namespace)::update($this->data);
    }

    public function deleteTipoFormComponent($data)
    {
        $this->data = $data;
        $this->type = 'delete';
        // app($this->namespace)::update($this->data);
    }

    public function destroy($id)
    {
        // dd($id);
        try {
            $item = $this->namespace::find($id);
            $item ? $item->delete() : false;
            $this->emit('refreshTipoTableComponent', $this->namespace);
            $this->resetFields();
            session()->flash('success', " Deleted Successfully!!");
        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong while deleting category!!");
        }
    }
   


    public function store()
    {
        // dd($this->namespace);
        $this->validate(app($this->namespace)->rules);
        try {
            app($this->namespace)::create($this->data);
            $this->emit('refreshTipoTableComponent', $this->namespace);
            $this->resetFields();
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message', 'Não foi possível cadastrar informação.');
        }
    }
    

    // public function delete($id)
    // {
    //     app($this->namespace)::find($id)->delete();
    // }

    // public function edit($data)
    // {
    //     // dd($this->data);
    //     try {
    //         $this->data = $data;
    //         $this->namespace = $data['id'];
    //     } catch (\Exception $ex) {
    //         session()->flash('error', 'Algo deu errado!!');
    //     }
    // }

    public function update()
    {
        // dd($this->data);
        $this->validate(app($this->namespace)->rules);
        try {
            // dd($this->namespace);
            app($this->namespace)::whereId($this->data['id'])->update($this->data);
            // dd($this->data);
            $this->emit('refreshTipoTableComponent', $this->namespace);
            session()->flash('success', 'Atualizado com sucesso!!');
            $this->resetFields();
        } catch (\Exception $ex) {
            
            session()->flash('success', 'Algo deu errado!!');
        }
    }

    private function resetFields()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->data = [];
    }
}
