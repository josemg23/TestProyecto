<div>
    <!-- componete de post -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>Post</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i
                            class="fas fa-ellipsis-v"></i> Crear Post</button>
                    <div class="card-body">
                        <h2>Listado de Post</h2>
                        <table class="table table-hover ">

                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Titulo(s)</th>
                                    <th>Resumen</th>
                                    <th colspan="2">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $c)
                                <tr>
                                    <td>{{$c->id}}</td>
                                    <td>{{$c->titulo}}</td>
                                    <td>{{$c->resumen}}</td>
                                    <td width="10px">
                                        <button wire:click="edit({{$c->id}})" class="btn btn-primary">
                                            Editar
                                        </button>
                                    </td>
                                    <!-- modal para livewire prueba  -->
                                    <td width="10px">
                                        <!-- <button wire:click.prevent="edit({{$c->id}})" type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModal">Edit</button> -->
                                        <!-- <button wire:click.prevent="edit({{$c->id}})" type="button"
                                            class="btn btn-success">Edit</button> -->
                                    </td>
                                    <td width="10px">
                                        <button wire:click="destroy({{$c->id}})" class="btn btn-danger">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>


<!-- modal para crear el post  ojo tiene que estar todo dentro del div padre-->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Titulo</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="titulo"
                                wire:model="titulo">
                            @error('titulo') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Resumen</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="resumen"
                                placeholder="Resumen">
                            @error('resumen') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="store()"
                        class="btn btn-primary close-modal">Guardar</button>
                </div>
            </div>
        </div>
    </div>





</div>

