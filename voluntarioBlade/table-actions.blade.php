{{-- resources/views/cars/table-actions.blade.php --}}
@if($tableAction)
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$modal}}"  wire:click="$emit('deleteTipoFormComponent', {{$model}})"><i class="fas fa-times"></i> Remover</button>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$modal}}" wire:click="$emit('editTipoFormComponent', {{$model}})"><i class="fas fa-edit"></i> Edita</button>
@else
<button  class="btn btn-danger"  wire:click="$emit('openDeleteFormCrud', {{$model}}, '{{$form}}')"><i class="fas fa-times"></i> Remover</button>
<button  class="btn btn-success"  wire:click="$emit('openEditFormCrud', {{$model}}, '{{$form}}')"><i class="fas fa-edit"></i> Editar</button>
@endif
