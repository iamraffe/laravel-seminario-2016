@extends ('app')

@section('title')
Ponentes | 
@stop

@section('description')
Hemos incluido conferenciantes europeos. Manteniendo un equilibrio entre las representaciones de Estados Unidos y las europeas.
@stop

@section('content')
  <section id="speakers-container">
    <header>
      <ul class="breadcrumb">
        <li><a href="/"><span class="fa fa-home aqua"></span></a></li>
        <li><span class="fa fa-users"></span> Ponentes</li>
      </ul>
    </header>
    <div class="col-xs-10 col-xs-offset-1">
      @foreach($speakers->chunk(3) as $chunk)
        <div class="row speakers">
          @foreach($chunk as $speaker)
            <article class="col-sm-3 col-sm-push-1 thumb">
              <a class="thumbnail" href="{{ url('/ponentes/'.$speaker->slug) }}">
                <img class="img-responsive" src="/img/ponentes/{{ $speaker->avatar }}" alt="{{ $speaker->nombre.' '.$speaker->primer_apellido.' '.$speaker->segundo_apellido }}">
                <header>
                  <h1 class="neo-sans-text">{{ $speaker->nombre.' '.$speaker->primer_apellido.' '.$speaker->segundo_apellido }}</h1>
                  <h2 class="neo-sans-text">{{ $speaker->centro }}</h2>        
                </header>
              </a>    
            </article>
          @endforeach
        </div>
      @endforeach
    </div>
  </section>
@stop

@section('javascript')

@stop