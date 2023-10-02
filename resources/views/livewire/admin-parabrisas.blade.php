<div>
    @if (session('info'))
        <div class="alert alert-primary" role="alert">
            <strong>¡Éxito!</strong>
            {{ session('info') }}
        </div>
    @endif
    <div class="card">

        {{-- <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="buscar" class="form-control w-100"
                placeholder="Escriba un nombre ..." type="text">
        </div> --}}
        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('admin.parabrisa.create') }}">NUEVO PRODUCTO</a>
        </div>

        @if ($parabrisas->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                     
                            <th>ID</th>
                            <th>TITULO</th>
                            <th>DESCRIPCION</th>
                            <th>FOTO</th>
                            <th>MARCA</th>
                            <th>precio</th>
                            
                            <th>detalles</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parabrisas as $parabrisa)
                            <tr>

                                <td>
                                    {{ $parabrisa->id }}
                                </td>                            
                               
                              
                                <td>
                                    {{ $parabrisa->titulo}}
                                </td>
                                <td>
                                    {{ $parabrisa->descripcion }}
                                </td>
                                
                                <td>
                                    {{ $parabrisa->marca}}
                                </td>
                                <td>
                                    {{ $parabrisa->color }}
                                </td>
                                <td>
                                    {{ $parabrisa->precio }}
                                </td>
                                
                                {{-- para que el boton quede pegado a la derecha->width=10px --}}
                             
                                <td width="10px">
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.parabrisa.edit', $parabrisa) }}">Editar</a>
                                </td>
                                <td width="10px">
                                    {{-- el form es necesario para cuando queremos eliminar por eso no pusimos la etiqueta <a href=""></a> --}}
                                    <form action="{{ route('admin.parabrisa.destroy', $parabrisa) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $parabrisas->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros ...</strong>
            </div>
        @endif

    </div>
</div>
