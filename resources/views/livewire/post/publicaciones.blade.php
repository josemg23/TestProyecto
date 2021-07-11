<div>

    @include('cruds.post.modal.modalpost')
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPost"> Crear
            Publicaciones</button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">


                    <div class="row p-2">
                        <div class="col-lg-3 col-sm-12 mt-2">
                            <input wire:model.debounce.300ms="search" type="text" class="form-control p-2"
                                placeholder="Buscar Post...">
                        </div>
                        <div class="col-lg-2 col-sm-12 mt-2">
                            <select wire:model="orderBy" class="custom-select " id="grid-state">
                                <option value="id">ID</option>
                                <option value="titulo">titulo</option>

                            </select>

                        </div>
                        <div class="col-lg-2 col-sm-12 mt-2">
                            <select wire:model="orderAsc" class="custom-select " id="grid-state">
                                <option value="1">Ascendente</option>
                                <option value="0">Descenente</option>
                            </select>

                        </div>
                        <div class="col-lg-2 col-sm-12 mt-2">
                            <select wire:model="perPage" class="custom-select " id="grid-state">
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                                <option>100</option>
                            </select>

                        </div>


                    </div>

                    <div class="table-responsive">

                        <table class="table table-hover ">
                            <thead class="thead-dark">
                                <tr class="">
                                    <th class="px-4 py-2 text-center ">ID</th>
                                    <th class="px-4 py-2 text-center ">Titulo</th>
                                    <th class="px-4 py-2 text-center ">Resumen</th>
                                    <th class="px-4 py-2 text-center ">Estado</th>
                                    <th class="px-4 py-2 text-center " colspan="2">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($data->isNotEmpty())
                                    @foreach ($data as $c)
                                        <tr>
                                            <td >{{ $c->id }}</td>
                                            <td >{{ $c->titulo }}</td>
                                            <td >{{ $c->resumen }}</td>
                                            <td>
                                                <span style="cursor: pointer;"
                                                    wire:click.prevent="estadochange('{{ $c->id }}')"
                                                    class="badge @if ($c->estado == 'activo') badge-success
                                                @else
                                                    badge-danger @endif">{{ $c->estado }}</span>
                                            </td>
                                            <td  width="10px">
                                                <button class="btn btn-success" data-toggle="modal"
                                                    data-target="#createPost"
                                                    wire:click.prevent="editPost({{ $c->id }})">
                                                   Editar
                                                </button>
                                            </td>
                                            <td   width="10px">
                                                <button class="btn btn-danger"
                                                    wire:click.prevent="$emit('eliminarRegistro','Seguro que deseas eliminar este Post?','eliminarPost', {{ $c->id }})">
                                                    Eliminar
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10">
                                            <p class="text-center">No hay resultado para la busqueda
                                                <strong>{{ $search }}</strong> en la pagina
                                                <strong>{{ $page }}</strong> al mostrar
                                                <strong>{{ $perPage }} </strong> por pagina
                                            </p>
                                        </td>
                                    </tr>

                                @endif
                            </tbody>
                        </table>
                    </div>


                </div>
                <div class="row justify-content-center">
                    {!! $data->links() !!}

                </div>
            </div>
        </div>
    </div>




</div>
