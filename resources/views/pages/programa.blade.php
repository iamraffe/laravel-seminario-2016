@extends ('app')

@section('title')
Programa | 
@stop

@section('description')
Nos centraremos en las estrategias y los programas para mejorar la calidad y la seguridad en un entorno en el que la innovación médica plantea nuevos retos
@stop

@section('content')
<ul class="breadcrumb">
  <li><a href="/"><span class="fa fa-home aqua"></span></a></li>
  <li><span class="fa fa-th-list"></span> Programa</li>
</ul>
<div class="row ">
  <div class="col-sm-10 col-sm-offset-1 programa-seminario">
        <div class="row programa-header green-background">
            <div class="col-md-3 program-time center ">
                <p>8:30h - 9:00h</p>
            </div>
            <div class="col-md-9 program-event">
                <p>Acreditaciones</p>
            </div>  
        </div>
        <div class="row programa-header green-background">
            <div class="col-md-3 program-time center">
                <p>9:00h - 9:30h</p>
            </div>
            <div class="col-md-9 program-event">
                <p>Bienvenida, introducción y presentación de la Jornada</p>
            </div>  
        </div>
        <div class="row light-gray-background program-entry">
            <div class="col-md-9 col-md-offset-3 ">
                <p class="programa-subtitle">Ponentes</p>
                <ul class="lista-ponentes">
                    <li>
                        <p class="ponente-name">D. Juan Antonio Álvaro de la Parra</p>
                        <p>Director del Hospital Universitario Fundación Jiménez Díaz·Grupo Quirónsalud.</p>
                    </li>
                    <li>
                        <p class="ponente-name">Dra. Leticia Moral Iglesias</p>
                        <p>Directora Corporativa de Asistencia, Calidad e Innovación del Grupo Quirónsalud.</p>
                    </li>
                    <li>
                        <p class="ponente-name">Dr. Raimon Belenes Juárez</p>
                        <p>Director del Seminario Internacional de Seguridad del Paciente y Excelencia Clínica del Grupo Quirónsalud.</p>
                    </li>
                </ul>
            </div>  
        </div>  

        <div class="row programa-header green-background">
            <div class="col-md-3 program-time center">
                <p>9:30h  - 10:30h</p>
            </div>
            <div class="col-md-9 program-event">
                <p>1ª Conferencia</p>
                <p>Una sanidad más segura; estrategias para el mundo real</p>
            </div>  
        </div>
        <div class="row light-gray-background program-entry">
            <div class="col-md-9 col-md-offset-3">
                <p class="programa-subtitle">Ponente</p>
                <ul class="lista-ponentes">
                    <li>
                        <p class="ponente-name">Dr. Charles Vincent</p>
                        <p>Profesor de psicología en la Universidad de Oxford e Investigador Senior en el National Institute of Health Research Centre.</p>
                        <p>Fue director del National Institute of Health Research Centre for Patient Safety &amp; Service Quality del Imperial College de Londres. Reino Unido.</p>
                    </li>
                </ul>
                <p>Presenta el <span class="bold">Dr. Javier Guerra Aguirre</span>, Director Médico del Hospital Universitario Fundación Jiménez Díaz·Grupo Quirónsalud.</p>
            </div>  
        </div>

        <div class="row programa-header green-background">
            <div class="col-md-3 program-time center">
                <p>10:30h - 11:30h</p>
            </div>
            <div class="col-md-9 program-event">
                <p>2ª Conferencia</p>
                <p>Nadie es perfecto: La transparencia mejora la seguridad del paciente</p>
            </div>  
        </div>
        <div class="row light-gray-background program-entry">
            <div class="col-md-9 col-md-offset-3 ">
                <p class="programa-subtitle">Ponente</p>
                <ul class="lista-ponentes">
                    <li>
                        <p class="ponente-name">Dra. Danielle Ofri</p>
                        <p>Médico internista en el Hospital de Bellevue y profesora de medicina en la Universidad de Nueva York. </p>
                        <p>Es además cofundadora y redactora jefe de la revista Bellevue Literary Review. Estados Unidos.</p>
                    </li>
                </ul>
                <p>Presenta <span class="bold">D. Jaume Raventós Monjo</span>. Director Territorial de Cataluña. Grupo Quirónsalud.</p>
            </div>  
        </div>

        <div class="row programa-header green-background">
            <div class="col-md-3 program-time center">
                <p>11:30h - 12:00h</p>
            </div>
            <div class="col-md-9 program-event">
                <p>Pausa café</p>
            </div>  
        </div>

        <div class="row programa-header green-background">
            <div class="col-md-3 program-time center">
                <p>12:00h - 14:00h</p>
            </div>
            <div class="col-md-9 program-event">
                <p>Mesa redonda: Mejores prácticas en seguridad del paciente. </p>
                <p>Breve presentación de los proyectos ganadores de la I Edición de los Premios Quirónsalud a las Mejores Iniciativas en Seguridad del Paciente y su evolución</p>
            </div>  
        </div>
        <div class="row light-gray-background program-entry">
            <div class="col-md-9 col-md-offset-3 ">
                <p class="programa-subtitle">Introducción.</p>
                <ul class="lista-ponentes">
                    <li>
                        <p class="ponente-name">Elementos para la mejora de la seguridad de los pacientes en España<br>Dra. Itziar Larizgoitia</p>
                        <p>Evaluadora Senior en Dirección General de la Organización Mundial de la Salud (OMS), fue coordinadora y responsable del Programa de Investigación en Seguridad del Paciente de la OMS. Suiza. </p>
                    </li>
                </ul>
                <p class="programa-subtitle">Presentación de los proyectos ganadores.</p>
                <ul class="lista-ponentes">
                    <li>
                        <p class="ponente-name">Historial farmacoterapéutico único por paciente en Osakidetza.<br>Dra. Teresa Madrid Conde</p>
                        <p>Técnico de la Subdirección de Calidad e Información Sanitaria. Osakidetza. Bilbao. </p>
                    </li>           
                    <li>
                        <p class="ponente-name">Impacto de la implantación de protocolos de tratamiento con medicamentos de alto riesgo en el paciente crítico. <br>Dra. Teresa Bermejo Vicedo</p>
                        <p>Jefe del Servicio de Farmacia Hospital Ramón y Cajal, Madrid.</p>
                    </li>                           
                    <li>
                        <p class="ponente-name">Seguridad sobre la terapia intravenosa en neonatología. <br>Dr. José Luis Leante Castellanos</p>
                        <p>Jefe de Sección de Neonatología del Hospital General Universitario Santa Lucía de Cartagena. Murcia.</p>
                    </li>
                </ul>
                <p>Moderador: <span class="bold">Dra. Celia García Menéndez</span>, Directora de Calidad y Seguridad del Paciente. Grupo Quirónsalud.</p>
            </div>  
        </div>

        <div class="row programa-header green-background">
            <div class="col-md-3 program-time center">
                <p>14:00h - 14:30h</p>
            </div>
            <div class="col-md-9 program-event">
                <p>Clausura y entrega del Premio Quirónsalud a la Mejores Iniciativas en Seguridad del Paciente II Edición</p>
            </div>  
        </div>
        <div class="row light-gray-background program-entry">
            <div class="col-md-9 col-md-offset-3">
                <p class="programa-subtitle">Entrega el premio la <span class="bold">Dra. Leticia Moral Iglesias</span>. Directora Corporativa de Asistencia, Calidad e Innovación del Grupo Quirónsalud</p>
            </div>  
        </div>  
        <div class="row programa-header green-background">
            <div class="col-md-3 program-time center">
                <p>14:30h - 15:30h</p>
            </div>
            <div class="col-md-9 program-event">
                <p>Refrigerio</p>
            </div>  
        </div>
  </div>
</div>
@stop