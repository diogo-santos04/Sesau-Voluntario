<div class="card p-4 m-4">
    <h2 class="mb-4">Instituição Parceira</h2>
    <div class="page-content compass container-fluid">
        <div class="row">
            <div class="row">
                <div class="page-content edit-add container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-4 mb-4">
                                <div class="card p-2 mb-4 bg-light">
                                    <h5>INSTITUICAO</h5>
                                </div>
                                <form wire:submit.prevent="store()">
                                    <div class="row">
                                        <div class="mb-4 col-4">
                                            <input type="hidden" wire:model.prevent="data.tipo_atividade" class="form-control">
                                            <livewire:admin.sesau.voluntario.select-component  columnName="nome" columnId="id" title="Tipo Atividade" model="App\Models\Admin\Sesau\Voluntario\TipoAtividade" label="tipo_atividade"/>

                                        </div>
                                        <div class="mb-4 col-4">
                                            <input type="hidden" wire:model.prevent="data.tipo_seguimento" class="form-control">
                                            <livewire:admin.sesau.voluntario.select-component  columnName="nome" columnId="id" title="Tipo Seguimento" model="App\Models\Admin\Sesau\Voluntario\TipoSeguimento" label="tipo_seguimento"/>


                                        </div>
                                        <div class="mb-4 col-4">
                                            <input type="hidden" wire:model.prevent="data.regiao_urbana" class="form-control">
                                            <livewire:admin.sesau.voluntario.select-component  columnName="id" columnId="id" title="Tipo Regiao Urbana" model="App\Models\Admin\Sesau\Voluntario\TipoRegiaoUrbana" label="regiao_urbana"/>
                                            
                                        </div>
                                        
                                        
                                        {{-- <div class="form-floating mb-4 col-4">
                                            <select wire:model.prevent="data.tipo_seguimento" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                @foreach($seguimentos as $seguimento)
                                                <option value="{{$seguimento->id}}">{{$seguimento->nome}}</option>
                                                @endforeach
                                            </select>
                                            <label for="tipo_seguimento">Tipo Seguimento</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <select wire:model.prevent="data.regiao_urbana" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                @foreach($regioes as $regiao)
                                                <option value="{{$regiao->id}}">{{$regiao->nome}}</option>
                                                @endforeach 
                                            </select>
                                            <label for="regiao_urbana">Região Urbana</label>
                                        </div> --}}
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.razao_social"
                                                class="form-control">
                                            <label for="razao_social">Razao Social</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text"
                                                wire:model.prevent="data.nome_fantasia"class="form-control">
                                            <label for="nome_fantasia">Nome fantasia</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.sigla" class="form-control">
                                            <label for="sigla">Sigla</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.cnpj" class="form-control">
                                            <label for="cnpj">CNPJ</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.email" class="form-control">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.telefone"
                                                class="form-control">
                                            <label for="telefone">Telefone</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.contato"
                                                class="form-control">
                                            <label for="contato">Contato</label>
                                        </div>
                                        <div class="form-floating p-0 mb-4 col-1">
                                            <p class="m-0 p-0">Status</p>
                                            <input type="checkbox" data-toggle="switchbutton" style="height: 10px">
                                             
                                        </div>
                                        <div class="form-floating mb-4 col-1">
                                            {{-- <label for="cv" class="control-label" style="height: 20px">Status</label> --}}
                                            <input type="checkbox" data-toggle="switchbutton" style="height: 10px">
                                        </div>
                                        <div class="form-floating mb-4 col-2">
                                            {{-- <label for="pe" class="control-label" style="height: 20px">Status</label> --}}
                                            <input type="checkbox" data-toggle="switchbutton" style="height: 10px">
                                        </div>
                                        <div class="form-floating mb-4 col-5">
                                            <select wire:model.prevent="data.classificacao" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">AZUL</option>
                                                <option value="2">VERDE</option>
                                                <option value="3">AMARELA</option>
                                                <option value="4">VERMELHA</option>
                                            </select>
                                            <label for="select">Classificao</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <select wire:model.prevent="data.risco" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">AZUL</option>
                                                <option value="2">VERDE</option>
                                                <option value="3">AMARELA</option>
                                                <option value="4">VERMELHA</option>
                                            </select>
                                            <label for="select">Risco</label>
                                        </div>
                                        <div class="form-floating mb-4 col-1">
                                            <select wire:model.prevent="data.prioridade" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">BAIXA</option>
                                                <option value="2">NORMAL</option>
                                                <option value="3">ALTA</option>
                                                <option value="4">URGENTE</option>
                                                <option value="5">IMEDIATA</option>
                                            </select>
                                            <label for="select">Prioridade</label>
                                        </div>
                                        <div class="form-floating mb-4 col-1">
                                            <select wire:model.prevent="data.complexidade" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">BAIXA</option>
                                                <option value="2">MEDIA</option>
                                                <option value="3">ALTA</option>
                                            </select>
                                            <label for="select">Complexidade</label>
                                        </div>
                                        <div class="form-floating mb-4 col-1">
                                            <select wire:model.prevent="data.situacao" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">ABERTA</option>
                                                <option value="2">FECHADA</option>
                                            </select>
                                            <label for="select">Situação</label>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label">Descrição</label>
                                            <textarea class="form-control" wire:model.prevent="data.descricao" rows="4"></textarea>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="number" wire:model.prevent="data.cep" class="form-control">
                                            <label for="cep">CEP</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.endereco"
                                                class="form-control">
                                            <label for="endereco">Endereço</label>
                                        </div>
                                        <div class="form-floating mb-4 col-2">
                                            <input type="text" wire:model.prevent="data.numero"
                                                class="form-control">
                                            <label for="numero">Numero</label>
                                        </div>
                                        <div class="form-floating mb-4 col-2">
                                            <input type="text" wire:model.prevent="data.uf" class="form-control">
                                            <label for="uf">Uf</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.bairro"
                                                class="form-control">
                                            <label for="bairro">Bairro</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.cidade"
                                                class="form-control">
                                            <label for="cidade">Cidade</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.complemento"
                                                class="form-control">
                                            <label for="complemento">Complemento</label>
                                        </div>
                                        <div class="form-floating mb-4 col-12">
                                            <input type="text" wire:model.prevent="data.url" class="form-control">
                                            <label for="url">URL</label>
                                        </div>
                                    </div>
                                </form>
                                <div>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>