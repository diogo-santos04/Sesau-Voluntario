@if ($formType == 'form')
    <button wire:click="$emit('openCloseFormCrud', '{{$form}}')" class="btn btn-primary"><i class="fas fa-plus-circle"></i> ADICIONAR</button>
@else
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $modal }}">
    Modal {{ $modal }}
    </button>
@endif
