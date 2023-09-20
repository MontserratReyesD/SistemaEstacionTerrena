@extends('layouts.app')
@section('styles')
<link href="{{ asset('css/monitor/console.css?v=1.4') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-toggle.min.css') }}" rel="stylesheet">
<!-- mPopup CSS file -->
<link  href="{{ asset('node_modules/m-popup/dist/mPopup.css?v=1.0')}}" rel="stylesheet" />
@endsection
@section('scriptsHeader')
<!-- mPopup Javascript file -->
<script src="{{ asset('node_modules/m-popup/dist/mPopup.jquery.js') }}"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="js/monitor/mychart.js"></script>
@endsection
@section('content')
<div class="container-fluid px-4">
  <!-- Page Heading -->
  <div class="align-items-center justify-content-between ">
    <h1 class="mt-4">Dashboard</h1>  
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Monitor</li>
    </ol>
  </div>
  <!-- Content Row -->
  <div class="row">
    @include("graphics.monitor.head_card")
  </div>
  <!-- Content Row -->
  <div class="row">
    @include("graphics.monitor.dht11_data")
    @include("graphics.monitor.acelerometro")
    @include("graphics.monitor.get_data")
  </div>
  <!-- Content Row -->
  <div class="row">
    @include("graphics.monitor.gps")
    @include("graphics.monitor.map")
  </div>
  
  <div class="row">
    @include("graphics.monitor.dht11_graphic")
    @include("graphics.monitor.vel_angular")
  </div>
  
  <div class="row">
    @include("graphics.monitor.altitud")
    @include("graphics.monitor.polvo")
  </div>
  <div class="mPopup" id="sample1" style="background: transparent; border: none;">
    <img src="{{url('image/loader7.gif?v=1.0')}}" style=" margin-left: auto; margin-right: auto;display: block;" width="45%"/>
  </div>
  <!--
  <div class="row">
  </div>
  <div class="row">
    
  </div>
  -->
  <!-- /.container-fluid -->
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://playground.abysscorp.org/chartjs/livecharts/dist/Chart.min.js"></script>
<script src="{{ asset('node_modules/socket.io/client-dist/socket.io.js') }}"></script>
<script src="{{ asset('js/sensores/temperatura.js?v=1.2') }}"></script>
<script src="{{ asset('js/sensores/giros.js?v=1.4') }}"></script>
<script src="{{ asset('js/sensores/altitud.js?v=1.5') }}"></script>
<script src="{{ asset('js/sensores/sensorscore.js?v=3.7') }}"></script><!-- GPS fix-->
<script src="{{ asset('js/sensores/tiempo.js?v=1.6') }}"></script>
<script src="{{ asset('js/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('js/sensores/script_chart_timeReal.js?v=1.3') }}"></script>
<script src="{{ asset('js/sensores/script_chart2.js?v=1.2') }}"></script>
<script src="{{ asset('js/monitor/captura_datos.js?v=1.1') }}"> </script>

<!--<script src="{{ asset('js/monitor/savedata.js?v=2.1') }}"></script>-->
<!--<script src="{{ asset('js/camare.js?v=1.1') }}"></script> -->
@endsection