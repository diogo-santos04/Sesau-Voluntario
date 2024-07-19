<div class="col-lg-4 mb-4">
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="p-4 mb-4">
        <div>
            <h4 class="my-8">Tabela {{ $title }} </h4>
            <livewire:admin.sesau.voluntario.tipo-form-component key="{{Str::random(5)}}"  modal="{{ $modal }}" namespace="{{ $model }}" form="{{ $form }}" title="{{ $title }}" />
            <livewire:admin.sesau.voluntario.tipo-table-component key="{{Str::random(5)}}"  modal="{{ $modal }}" model="{{ $model }}" form="{{ $form }}" title="{{ $title }}" />
        </div>
    </div>
</div>
