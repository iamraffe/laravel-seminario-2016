@extends ('app')

@section('title')
Inscripción | 
@stop

@section('description')
En esta sección podrá inscribirse para participar en la segunda edición del seminario.
@stop

@section('content')
  <section id="registration-container">
    <header>
      <ul class="breadcrumb">
        <li><a href="/"><span class="fa fa-home aqua"></span></a></li>
        <li><span class="fa fa-pencil-square-o"></span> Inscripción</li>
      </ul>
    </header>
    <article class="row registration">
      <div class="col-md-10 col-md-offset-1">
        @if ( isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Se encontraron los siguientes problemas con su formulario:<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('message'))
            <div class="alert alert-success">
              {{Session::get('message')}}
            </div>
        @endif
        <form class="form-horizontal" action="{{ url('handle-registration') }}" method="POST">
          <fieldset>
            <legend class="neo-sans-text"><h1>Inscripción</h1></legend>
            <div class="form-group">
              <label for="nombre" class="col-sm-3 control-label">Nombre</label>
              <div class="col-sm-9">
                <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Nombre">
              </div>
            </div>
            <div class="form-group">
              <label for="primer_apellido" class="col-sm-3 control-label">Primer Apellido</label>
              <div class="col-sm-9">
                <input type="text" required class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Primer Apellido">
              </div>
            </div>
            <div class="form-group">
              <label for="segundo_apellido" class="col-sm-3 control-label">Segundo Apellido</label>
              <div class="col-sm-9">
                <input type="text" required class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Segundo Apellido">
              </div>
            </div>
            <div class="form-group">
              <label for="centro" class="col-sm-3 control-label">Centro</label>
              <div class="col-sm-9">
                <input type="text" required class="form-control" id="centro" name="centro" placeholder="Centro">
              </div>
            </div>
            <div class="form-group">
              <label for="ciudad" class="col-sm-3 control-label">Ciudad</label>
              <div class="col-sm-9">
                <input type="text" required class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
              </div>
            </div>
            <div class="form-group">
              <label for="cargo" class="col-sm-3 control-label">Cargo</label>
              <div class="col-sm-9">
                <input type="text" required class="form-control" id="cargo" name="cargo" placeholder="Cargo">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-3 control-label">Correo Electrónico</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico">
              </div>
            </div>
            <div class="form-group">
              <label for="telefono" class="col-sm-3 control-label">Teléfono</label>
              <div class="col-sm-9">
                <input type="text" required class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
              </div>
            </div>
            <div class="form-group">
              <label for="telefono_secundario" class="col-sm-3 control-label">Teléfono Secundario</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="telefono_secundario" name="telefono_secundario" placeholder="Teléfono Secundario">
                <span class="help-block">Opcional</span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <button type="submit" class="btn btn-custom pull-right disabled" disabled>Enviar</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>      
    </article>
  </section>
@stop

@section('javascript')
  <script>
    function canSubmitForm(form){
      var canSubmit = true;
      form.find('input:not(#telefono_secundario)').each(function() {
         var element = $(this);
         if (element.val() == "") {
             canSubmit = false;
         }
      });
      return canSubmit;
    }
    $(function(){
      $(document).on("change input keydown", "form", function(){
        if(canSubmitForm($(this))){
          $('button.btn-custom').removeClass('disabled').prop('disabled', false);
        }
      });
    });
  </script>
@stop