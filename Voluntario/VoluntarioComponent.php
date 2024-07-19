<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Livewire\Component;
use App\Models\Admin\Sesau\Voluntario\Colaborador;
use App\Models\Admin\Sesau\Voluntario\Instituicao;
use App\Models\Admin\Sesau\Voluntario\TipoAtividade;
use App\Models\Admin\Sesau\Voluntario\TipoRegiaoUrbana;
use App\Models\Admin\Sesau\Voluntario\TipoSeguimento;


class VoluntarioComponent extends Component
{
    public $data=[];
    public $atividades;
    public $seguimentos;
    public $regioes;
    public $model, $form, $title,$tableAction,$dado;
    
    protected $rules = [
        'nome' => 'required|min:6',
    ];
    
    public function mount(){
        $this->data['razao_social']="AQUARIO PANTANAL";
        $this->data['nome_fantasia']="AQUARIO PANTANAL";
        $this->data['email']="aquario@aquario";
        $this->data['telefone']="67";
        $this->data['cep']="791202-52";
        $this->data['endereco']="AVENIDA AFONSO PENA";
        $this->data['numero']="1212";
        $this->data['uf']="MS";
        $this->data['bairro']="CENTRO";
        $this->data['cidade']="CAMPO GRANDE";
        $this->data['url']="https://cdn6.campograndenews.com.br/uploads/noticias/2022/03/22/88ab207723b75173ef4c97bff0e61a5a766010be.jpg";
        // $this->model = $model;
        // $this->model = $form;
        // $this->model = $title;
    }
    public function render()
    {
        $this->atividades = TipoAtividade::where('status', true)->get();
        $this->seguimentos = TipoSeguimento::where('status', true)->get();
        $this->regioes = TipoRegiaoUrbana::where('status', true)->get();
        return view('livewire.admin.sesau.voluntario.voluntario-component');
    }

    public function store(){
        $this->validate([
            'data.razao_social' => 'required',
            // 'data.tipo_seguimento_id'=>'required',
            // 'data.tipo_regiao_urbana_id'=>'required',
        ]);
        // dd("aaa");


        try{
            // dd($this->data);
           Instituicao::create($this->data);    
            $this->resetFields();
        }catch (\Throwable $th){ 
            dd($th);   
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
    }

    public function selectedColumn($value, $label){
        // dd($value);
        $this->data[$label] = $value;
    }

    public function resetFields()
    {
        $this->data = [];
    }
}
