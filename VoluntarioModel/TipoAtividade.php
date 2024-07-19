<?php

namespace App\Models\Admin\Sesau\Voluntario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;


class TipoAtividade extends Model
{
    use HasFactory;
    // protected $connection = 'voluntario';
    protected $table = 'voluntario.tipo_atividades';

    protected $fillable = ['nome','status'];

    public $rules = [
        'data.nome' => 'required|min:1|max:255',
    ];

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Tipo Atividade', 'nome')->searchable()->sortable(),
            Column::make('Ações')->view('admin.sesau.voluntario.table-actions'),
        ];
    }

    public function setNomeAttribute($value){
        $this->attributes['nome'] = strtoupper($value);
    }
}
