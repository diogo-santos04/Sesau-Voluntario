<div wire:ignore.self class="dropdown d-grid gap-2">
    <fieldset disabled="disabled" class="d-grid gap-2">
        <button wire:ignore.self type="button"class="btn btn-lg btn-{{ $color }} dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"data-bs-auto-close="outside">
            {{ $title }}
        </button>
    </fieldset>
    <div wire:ignore.self class="dropdown-menu p-4 " style="width: 100%;">
        <div class="mb-3">
            <input type="text" wire:model.debounce.500ms="search" class="form-control" placeholder="Pesquise aqui">
        </div>
        @foreach ($colunas as $column)
            <label wire:ignore.self class="d-block" for="{{ $label }}">
                <input class="radio_animated mt-2 mx-2" type="radio" wire:model="selected"
                    value="{{ $column }}">{{ $column->$columnName }}
            </label>
        @endforeach
        <div wire:ignore.self class="m-3">
            {{ $colunas->links() }}
        </div>
    </div>
</div>
