<div>
    <div class="row">
        <div class="mb-4 col-12">
            <input type="hidden" wire:model.prevent="data.instituicao_id" class="form-control">
            <livewire:admin.sesau.voluntario.dropdown-component color="secondary" key="{{Str::random(5)}}" columnName="nome_fantasia" columnId="id" titulo="Instituicao" model="App\Models\Admin\Sesau\Voluntario\Instituicao" label="instituicao_id" value="{{ isset($data['instituicao_id']) ? $data['instituicao_id'] : '0' }}"/>
            @error('data.instituicao_id')<span class="text-danger">{{ $message }}</span> @enderror                                          
        </div>
        <div class="form-floating mb-4 col-6">
            <input type="text" wire:model.defer="data.nome" class="form-control">
            <label for="nome">Nome*</label>
        </div>
        <div class="form-floating mb-4 col-3">
            <input type="text" wire:model.defer="data.apelido" class="form-control">
            <label for="apelido">Apelido</label>
        </div>
        <div class="form-floating mb-4 col-3">
            <input type="text" wire:model.defer="data.cpf" class="form-control">
            <label for="cpf">Cpf</label>
        </div>
        <div class="form-floating mb-4 col-6">
            <input type="text" wire:model.defer="data.cargo" class="form-control">
            <label for="cargo">Cargo</label>
        </div>
        <div class="form-floating mb-4 col-6">
            <input type="text" wire:model.defer="data.email" class="form-control">
            <label for="email">Email</label>
        </div>
        <div class="form-floating mb-4 col-3">
            <input type="text" wire:model.defer="data.telefone" class="form-control">
            <label for="telefone">Telefone</label>
        </div>
        <div class="form-floating mb-4 col-3">
            <input type="text" wire:model.defer="data.celular" class="form-control">
            <label for="celular">Celular</label>
        </div>
        <div class="form-floating mb-4 col-3">
            <input type="date" wire:model.prevent="data.data_inicial" class="form-control">
            <label for="data_inicial">Data Inicial</label>
        </div>
        <div class="form-floating mb-4 col-3">
            <input type="date" wire:model.prevent="data.data_final" class="form-control">
            <label for="data_final">Data Final</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label">Nota</label>
            <textarea class="form-control" wire:model.defer="data.nota" rows="3"></textarea>
        </div>
        <div class="form-check form-switch col-2">
            <div class="mb-4 px-4">
                <label for="status" class="form-check-label">Status</label>
                <input type="checkbox" wire:model="data.status" id="status" class="form-check-input">
                @error('status')
                    <span class="error">{{ $mssage }}</span>
                @enderror
            </div>
        </div>
    </div>
</div>
