<table class="table-responsive">
    <tr>
        <td><strong>Nombre</strong></td>
        <td><strong>Departamento</strong></td>
        <td><strong>Provincia</strong></td>
        <td><strong>Distrito</strong></td>
        <td><strong>Lugar</strong></td>
    </tr>
        @foreach($centrosDeSalud as $centroDeSalud)
            <tr>
                <td>{{ $centroDeSalud->hos_name }}</td>
                <td>{{ $centroDeSalud->distrito->provincia->region->reg_name }}</td>
                <td>{{ $centroDeSalud->distrito->provincia->prov_name }}</td>
                <td>{{ $centroDeSalud->distrito->dist_name }}</td>
                <td>{{ $centroDeSalud->hos_add }}</td>
            </tr>
        @endforeach
</table>