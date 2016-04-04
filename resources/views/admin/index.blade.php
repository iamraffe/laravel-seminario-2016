@extends('dashboard')

@section('title')
Dashboard |
@endsection

@section('content')
    <div class="row">
      <div class=" col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua">
            <span class="fa fa-codepen"></span>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">Inscripciones </span>
            <span class="info-box-number">
              {!! $registrations->count() !!} PERSONAS
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      @include('admin.partials._registrationsTable', ['registrations' => $registrations])
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('#registrations').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true,
              "responsive": true,
              "language": {
                    "url": "http://cdn.datatables.net/plug-ins/1.10.7/i18n/Spanish.json"
                }
            });
        });
    </script>
@endsection