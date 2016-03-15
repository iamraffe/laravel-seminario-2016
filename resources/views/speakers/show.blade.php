@extends ('app')

@section('title')
{{ $speaker->nombre.' '.$speaker->primer_apellido.' '.$speaker->segundo_apellido }} | 
@stop

@section('description')
Hemos incluido conferenciantes europeos. Manteniendo un equilibrio entre las representaciones de Estados Unidos y las europeas.
@stop

@section('content')
  <section id="speakers-container">
    <header>
      <ul class="breadcrumb">
        <li><a href="/"><span class="fa fa-home aqua"></span></a></li>
        <li><a href="{{ url('/ponentes') }}"><span class="fa fa-users"></span> Ponentes</a></li>
        <li><span class="fa fa-users"></span> {{ $speaker->nombre.' '.$speaker->primer_apellido.' '.$speaker->segundo_apellido }}</li>
      </ul>
    </header>
    <div class="row speaker">
        <article class="">
          <header class="col-sm-3 col-sm-offset-1">
            <div class="member">
              <div class="member-img">
                  <img src="/img/ponentes/{{ $speaker->avatar }}" alt=" {{ $speaker->nombre.' '.$speaker->primer_apellido.' '.$speaker->segundo_apellido }}">
                  <h2> {{ $speaker->nombre.' '.$speaker->primer_apellido.' '.$speaker->segundo_apellido }}</h2>

                  <div class="member-role">
                      <p class="ponente-cargo"> {{ $speaker->cargo }}</p>
                      <p class="ponente-centro"> {{ $speaker->centro }}</p>
                  </div>
              </div>    
            </div>  
          </header>
          <section class="col-sm-7">
            {!! $speaker->bio !!}
          </section>
        </article>
    </div>
  </section>
@stop

@section('javascript')

@stop