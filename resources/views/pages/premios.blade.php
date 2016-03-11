@extends ('app')

@section('title')
Premios | 
@stop

@section('description')
El Grupo busca fomentar el desarrollo de prácticas seguras para los usuarios y profesionales de la sanidad, reconociendo los mejores proyectos de 2015 y 2016.
@stop

@section('content')
  <section id="premios-container">
    <header>
      <ul class="breadcrumb">
        <li><a href="/"><span class="fa fa-home aqua"></span></a></li>
        <li><span class="fa fa-trophy"></span> Premios</li>
      </ul>
    </header>
    <article class="row premios">
      <div class="col-md-10 col-md-offset-1">
        <header>
          <h1 class="aqua">II Edición Premio Quirónsalud a las Mejores Iniciativas en Seguridad del Paciente.</h1>
          <h2>Participa y demuestra tu compromiso</h2>        
        </header>
        <p>Quirónsalud y la Fundación Quirónsalud han convocado la <span class="bold">II Edición de los Premios a las Mejores Iniciativas en Seguridad del Paciente</span>. con el objetivo de fomentar el desarrollo de prácticas seguras para los usuarios del sistema de salud y sus profesionales. Las candidaturas podrán presentarse hasta el próximo <span class="bold">9 de abril</span> a través de la web <a href="http://www.quironsalud.es" title="quironsalud">quironsalud.es</a>, donde están disponibles las <a href="http://www.quironsalud.es/es/comunicacion/noticias/ii-edicion-premio-quironsalud-mejores-iniciativas-seguridad.ficheros/231205-Bases%20II%20Edici%C3%B3n%20Premio%20Mejores%20%20Iniciativas%20Seguridad%20Paciente.pdf" title="bases">bases</a> con el detalle de la documentación requerida.</p>
        <img data-hook="premios-poster" src="/img/premios.gif" alt="II Edición Premio Quirónsalud a las Mejores Iniciativas en Seguridad del Paciente.">
        <p>La convocatoria cuenta con <span class="bold">tres categorías: un primer premio de 15.000 €</span> y un <span class="bold">segundo premio de 7.000 €,</span> para reconocer los dos proyectos más relevantes que hayan sido desarrollados durante 2015; y <span class="bold">un accésit,</span> dotado con <span class="bold">3.000 €,</span> para la mejor iniciativa que tenga previsto su implantación durante este año.</p>
        <p>Los candidatos a estos premios, personas o entidades, podrán pertenecer a centros sanitarios tanto públicos como privados, o a instituciones relacionadas con la sanidad como sociedades científicas o asociaciones de pacientes, entre otras. Cada autor o grupo de autores podrán presentar una o varias iniciativas.</p>
        <p>Los trabajos ganadores serán anunciados durante el III Seminario Internacional de Seguridad del Paciente y Excelencia Clínica, organizado por Quirónsalud, que tendrá lugar <span class="bold">el próximo 5 de mayo de 2016 en el Aula Magna de la Fundación Jiménez Díaz en Madrid.</span></p>
        <p>Estos premios, que responden al compromiso de Quirónsalud, y su Fundación, con la búsqueda de la excelencia asistencial a través de la mejora continua, van en línea con la petición de la Organización Mundial de la Salud (OMS) de prestar la mayor atención posible a la seguridad del paciente y promover políticas y mecanismos basados en la evidencia.</p>
        <p><span class="fa fa-file-pdf-o red"></span> <a href="http://www.quironsalud.es/en/virtual-press-room/news/ii-edicion-premio-quironsalud-mejores-iniciativas-seguridad.files/231205-Bases%20II%20Edici%C3%B3n%20Premio%20Mejores%20%20Iniciativas%20Seguridad%20Paciente.pdf">Bases II Edición Premio Mejores Iniciativas Seguridad Paciente (1.7 MB) (9 páginas)</a></p>
      </div>      
    </article>
  </section>
@stop

@section('javascript')
  <script>
    $(function(){
      $('img[data-hook="premios-poster"]').on('click', function(e){
        window.open('http://www.quironsalud.es/en/virtual-press-room/news/ii-edicion-premio-quironsalud-mejores-iniciativas-seguridad', '_blank');
      })
    });
  </script>
@stop