<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Registro en la Base de Datos [Seminario - 2016]</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <style>
        * {
            font-family: 'Lato', sans-serif;
        }
        h1{
            font-family: 'Lato', sans-serif;
        }
        p{
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>
<body>
    <img src="http://beta.seminarioexcelencia.com/img/seminario_2016.png" alt="Logo del 3er Seminario Internacional de Seguridad del Paciente y Excelencia Clínica" style="display:block; max-width: 450px; margin: 25px auto;">
    <h1 style="font-family: 'Lato', sans-serif;">Nueva inscripción en la base de datos del seminario:</h1>
    <p>Nombre:  {{ $nombre }}</p>
    <p>Apellidos: {{ $primer_apellido }} {{ $segundo_apellido }}</p>
    <p>Centro: {{ $centro }}</p>
    <p>Ciudad: {{ $ciudad }}</p>
    <p>Cargo: {{ $cargo }}</p>
    <p>Correo Electrónico: {{ $email }}</p>
    <p>Telefóno: {{ $telefono }}</p>

    @if(isset($telefono_secundario))
        <p>Telefóno secundario: {{ $telefono_secundario }}</p>
    @endif
    <p>[Este es un mensaje automático - Por favor, no responda directamente a este correo]</p>
</body>
</html>