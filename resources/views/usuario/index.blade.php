<h1>Listado de Usuarios</h1>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
            <th>email</th>
            <th>password</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuario as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->age }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->password }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
