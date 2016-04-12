<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .page-break {
            page-break-after: always;
        }
@page { margin: 0.175in; }
body { margin: 0px; }
table {
  border-spacing: 0;
  border-collapse: collapse;
  width: 11.35in;
  font-family: Trebuchet MS, sans-serif;
}
td,
th {
  padding: 0;
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */


  thead {
    display: table-header-group;
    font-size: 12px;
    text-align: center;
    color: white;
    border-color: white;
    background: #00B2A9 !important;

  }
  tbody{
    font-size: 10px;
  }
  tr {
    page-break-inside: avoid;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }

    </style>
</head>
<body>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido (1)</th>
                <th>Apellido (2)</th>
                <th>Email</th>
                <th>Ciudad</th>
                <th>Centro</th>
                <th>Cargo</th>
                <th>Teléfono (1)</th>
                <th>Teléfono (2)</th>
                <th>Fecha de Inscripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{ $key + 1 }}</td>
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
        </tbody>
    </table> 
</body>
</html>
    
