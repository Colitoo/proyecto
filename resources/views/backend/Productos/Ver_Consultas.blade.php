<x-layout title="Consultas recibidas">
    <div class="container mt-4">
        <h2 class="subtitulo txt-color text-center">Consultas recibidas</h2>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
        <div class="table-responsive m-4">
            <table class="table table-dark table-striped table-bordered align-middle">
                <thead>
                    <tr>
                        <th>Nro</th>
                        <th>Nombre</th>
                        <th>Mail</th>
                        <th>Teléfono</th>
                        <th>Motivo</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consultas as $consulta)
                    <tr>
                        <td>{{ $consulta->id }}</td>
                        <td>{{ $consulta->{'nombre y apellido'} }}</td>
                        <td>{{ $consulta->mail }}</td>
                        <td>{{ $consulta->telefono }}</td>
                        <td>{{ $consulta->motivo }}</td>
                        <td>
                            <button type="button" class="btn bg-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $consulta->id }}">
                                Ver mensaje
                            </button>
                        </td>
                        <td>{{ $consulta->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            @if(!$consulta->contestado)
                            <span class="badge bg-warning">Pendiente</span>
                            @else
                            <span class="badge bg-success">Contestada</span>
                            @endif
                        </td>
                        <td>
                            @if(!$consulta->contestado)
                            <form action="{{ route('consultas.marcar-contestada', $consulta->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">
                                    Contestada
                                </button>
                            </form>
                            @else
                            <form action="{{ route('consultas.marcar-pendiente', $consulta->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-warning btn-sm">
                                    Pendiente
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Modal para ver el mensaje -->
            @foreach ($consultas as $consulta)
            <div class="modal fade" id="exampleModal{{ $consulta->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $consulta->id }}" aria-hidden="true" data-bs-theme="dark">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel{{ $consulta->id }}">Mensaje de: {{ $consulta->{'nombre y apellido'} }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Motivo: {{ $consulta->motivo }}</p>
                            <p>Plataforma: {{ $consulta->plataforma }}</p>
                            <p>Mensaje: <br> {{ $consulta->mensaje }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>