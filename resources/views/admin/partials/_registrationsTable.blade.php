   <div class="col-xs-12 col-md-12">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Inscripciones</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="registrations" class="table table-bordered table-hover" data-order='[[9, "asc"]]'>
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Teléfono Secundario</th>
                <th>Ciudad</th>
                <th>Centro</th>
                <th>Cargo</th>
                <th>Fecha</th>
                <!-- <th data-orderable="false">Opciones</th> -->
              </tr>
            </thead>
            <tbody>
            @if(isset($registrations))
              @foreach($registrations as $registration)
                  <tr>
                    <td>{{ $registration->nombre }}</td>
                    <td>{{ $registration->primer_apellido }}</td>
                    <td>{{ $registration->segundo_apellido }}</td>
                    <td>{!! $registration->email !!}</td>
                    <td>{!! $registration->telefono !!} </td>
                    <td>{!! $registration->telefono_secundario !!}</td>
                    <td>{{ $registration->ciudad }}</td>
                    <td>{{ $registration->centro }}</td>
                    <td>{!! $registration->cargo !!}</td>
                    <td>{{ $registration->created_at->format('j/m H:i') }}</td>
                  </tr>
              @endforeach
            @endif
            </tbody>
            <tfoot>
              <tr>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Teléfono Secundario</th>
                <th>Ciudad</th>
                <th>Centro</th>
                <th>Cargo</th>
                <th>Fecha</th>
                <!-- <th data-orderable="false">Opciones</th> -->
              </tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->