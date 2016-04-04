@extends('dashboard')

@section('title')
Dashboard |
@endsection

@section('content')
    <div class="row">
      <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow">
            <span class="fa fa-music"></span>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">Registros </span>
            <span class="info-box-number">
              {!! '<span class="text-success">'.$registrations->count().'</span><span class="text-primary">/'.$registrations->count().'</span>' !!}
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

    </div>
@endsection

@section('scripts')

@endsection