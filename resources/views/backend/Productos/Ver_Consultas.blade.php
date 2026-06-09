<x-layout title="Consultas recibidas">
    <div class="container mt-4">
        <h2>Consultas recibidas</h2>

        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Mail</th>
                    <th>Teléfono</th>
                    <th>Motivo</th>
                    <th>Plataforma</th>
                    <th>Mensaje</th>
                    <th>Estado</th>
                    <th>Fecha</th>
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
                    <td>{{ $consulta->plataforma }}</td>
                    <td>{{ $consulta->mensaje }}</td>
                    <td>
                        @if($consulta->contestado)
                        <span class="badge bg-success">Contestada</span>
                        @else
                        <span class="badge bg-warning">Pendiente</span>
                        @endif
                    </td>
                    <td>{{ $consulta->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>