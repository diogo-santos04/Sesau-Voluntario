<?php

namespace App\Models\Admin\Sesau\Voluntario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;


class Colaborador extends Model
{
    use HasFactory;
    // protected $connection = 'voluntario';
    protected $table = 'voluntario.colaboradores';


    protected $fillable=[ 'instituicao_id', 'nome', 'apelido', 'cpf', 'empresa', 'cargo', 'email', 'telefone', 'celular', 'data_inicial', 'data_final', 'nota', 'status',];

    public $rules = [       
        'data.nome' => 'required',
    ];

    public function instituicao(){
        return  $this->belongsTo(Instituicao::class, 'instituicao_id');
    }

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Colaborador', 'nome')->searchable()->sortable(),
            Column::make('Email', 'email')->searchable()->sortable(),
            Column::make('Instituicao')->view('livewire.admin.sesau.voluntario.colaborador.table.instituicao'),

            Column::make('Ações')->view('admin.sesau.voluntario.colaborador.colaborador-action'),
        ];
    }

}
