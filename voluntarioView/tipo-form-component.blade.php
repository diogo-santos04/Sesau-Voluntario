<div>
    <div wire:ignore.self class="modal fade" id="staticBackdrop{{ $modal }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{ $modal }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel{{ $modal }}">Modal title
                        {{ $title }} </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{ $form }}
                    @include($form)
                    <div class="row form-check form-switch">
                        <div class="mb-4">



                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @if (isset($data['id']))
                        @if ($type == 'update')
                            <button type="button" wire:click="update({{ $data['id'] }})" data-bs-dismiss="modal"
                                class="btn btn-primary ">ATUALIZAR</button>
                        @endif
                        @if ($type == 'delete')
                            <button type="button" wire:click="destroy({{ $data['id'] }})" data-bs-dismiss="modal"
                                class="btn btn-danger ">DELETAR</button>
                        @endif
                    @else
                        <button type="button" wire:click="store" type="submit" class="btn btn-primary">SALVAR</button>
                    @endif
                    <button type="button" class="btn btn-secondary  ">CANCELAR</button>

                </div>
            </div>
        </div>
    </div>

</div>
