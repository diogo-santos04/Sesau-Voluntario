<div class="form-floating" >
    <select wire:model.prevent="selected" class="form-select" aria-label="Default select example">
        <option value="">---SELECIONE---</option>
        @foreach ($columns as $column)
            <option  value="{{ $column->$columnId }}">{{ $column->$columnName }}</option>
        @endforeach
    </select>
    <label for="{{ $label }}">{{ $title }}</label>
</div>
