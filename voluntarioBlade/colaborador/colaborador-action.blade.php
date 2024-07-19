<button  class="btn btn-danger"  wire:click="$emit('openDeleteFormCrudTab', {{$model}}, '{{$form}}')"><i class="fas fa-times"></i> Remover</button>
<button  class="btn btn-success"  wire:click="$emit('openEditFormCrudTab', {{$model}}, '{{$form}}')"><i class="fas fa-edit"></i> Editar</button>
<button  class="btn btn-info" wire:click="export" ><i class="fas fa-print"></i> Imprimir</button>