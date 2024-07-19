<?php

namespace App\Models\Admin\Sesau\Voluntario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;
// use Maatwebsite\Excel\Concerns\FromCollection;


class Instituicao extends Model
{
    use HasFactory;
    // protected $connection = 'voluntario';
    protected $table = 'voluntario.instituicoes';

    protected $fillable = ['tipo_atividade_id', 'tipo_seguimento_id', 'tipo_regiao_urbana_id', 'nome', 'descricao', 'nome_fantasia', 'razao_social', 'cnpj','telefone', 'fone_contato', 'email', 'sigla', 'cep','endereco', 'numero', 'uf', 'bairro', 'cidade', 'complemento', 'classificacao', 'risco', 'prioridade', 'complexidade', 'situacao','cv','pe','url', 'status'];

    public $rules = [   
        'data.tipo_atividade_id' => 'required',
        'data.tipo_seguimento_id' => 'required',
        'data.tipo_regiao_urbana_id' => 'required',
        'data.nome_fantasia' => 'required|min:1|max:255',
    ];

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Instituicao', 'nome_fantasia')->searchable()->sortable(),
            Column::make('Email', 'email')->searchable()->sortable(),
            Column::make('Colaborador')->view('livewire.admin.sesau.voluntario.colaborador.table.actions'),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }

    public function setNomeSocialAttribute($value){
        $this->attributes['razao_social'] = strtoupper($value);
    }

    public function setNomeFantasiaAttribute($value){
        $this->attributes['nome_fantasia'] = strtoupper($value);
    }

    public function setSiglaAttribute($value){
        $this->attributes['sigla'] = strtoupper($value);
    }

    public function setContatoAttribute($value){
        $this->attributes['fone_contato'] = strtoupper($value);
    }

    public function tipoAtividade()
    {
        return $this->belongsTo(TipoAtividade::class, 'tipo_atividade_id');
    }

    public function tipoSeguimento()
    {
        return $this->belongsTo(TipoSeguimento::class, 'tipo_seguimento_id');
    }

    public function tipoRegiaoUrbana()
    {
        return $this->belongsTo(TipoRegiaoUrbana::class, 'tipo_regiao_urbana_id');
    }
}
