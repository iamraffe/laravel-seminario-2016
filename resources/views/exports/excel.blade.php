<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
    <tr>
        <td>Nombre</td>
        <td>Primer Apellido</td>
        <td>Segundo Apellido</td>
        <td>Email</td>
        <td>Ciudad</td>
        <td>Centro</td>
        <td>Cargo</td>
        <td>Teléfono</td>
        <td>Teléfono secundario</td>
        <td>Fecha de Inscripción</td>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ ucfirst(strtolower($user->nombre)) }}</td>
            <td>{{ ucfirst(strtolower($user->primer_apellido)) }}</td>
            <td>{{ ucfirst(strtolower($user->segundo_apellido)) }}</td>
            <td>{{ strtolower($user->email) }}</td>
            <td>{{ ucfirst(strtolower($user->ciudad)) }}</td>
            <td>{{ ucfirst(strtolower($user->centro)) }}</td>
            <td>{{ ucfirst(strtolower($user->cargo)) }}</td>
            <td>{{ $user->telefono }}</td>
            <td>{{ $user->telefono_secundario }}</td>
            <td>{{ $user->created_at->format('d/m - H:i') }}</td>
        </tr>
    @endforeach
</body>
</html>
    
