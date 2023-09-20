@extends('layouts.app')
@section('styles')<!-- Bootstrap Select Css -->
<!-- -->
<link href="http://localhost/telepuerto/public/css/application.css?v1.3.3" rel="stylesheet">
<style type="text/css">
.spinner
{
position: absolute;
left: 0px;
top: 0px;
width: 100%;
height: 100%;
z-index: 0;
background: url(./img/spinners/loader.gif) 50% 25% no-repeat ;
display: none;/*visibility: hidden;*/
}
</style>
@endsection
@section('scriptsHeader')
@stop
@section('content')
<div class="desktop " id="a">
    <div class="design ">
        
        @include('menu.devices')

        <div  class="work-view-container box-container " >
            
            <div class="work-view"  >
                
                <div class="pan-zoom-ctrl in-desktop"><img src="./tablero/zoom-in.svg"><img src="./tablero/zoom-out.svg">
                    <div><img class="settings-button" src="./tablero/settings.svg"></div>
                </div>
                

            <div class="fullWidth flex " id="container3" >
                <ul id = "sortable-10">
                    <svg id="root" class="maxFullHeightWidth margin-auto" version="1.2" baseProfile="tiny" transform="translate(-68,-48) scale(1)" width="8.9242in" height="7.6449in" viewBox="-2330.7654 -2029.2294 9124.2175 6844.9000">
                        <img class="spinner" id="path" data-src="{{URL::to('/')}}" />
                    </svg>
                </ul>
            </div>
            

                <div id="container2" class=" overlay overlay-closed builder-drop-overlay">
                    <div class="overlay-content">
                        <div class="builder-drop-overlay-border"></div>
                        <svg class="icon icon-add-circle" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Add-input-" transform="translate(-38.000000, -57.000000)">
                                    <g id="addInput" transform="translate(38.000000, 57.000000)">
                                        <circle id="Oval-3" fill="#FDB72F" cx="32" cy="32" r="32"></circle>
                                    <path d="M36,29 L36,18 L29,18 L29,29 L18,29 L18,36 L29,36 L29,47 L36,47 L36,36 L47,36 L47,29 L36,29 Z" id="Combined-Shape" fill="#FFFFFF"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h1 class="text-app-header-1">Arraste y suelte el componente aqui</h1>
                </div>
            </div>

            </div> <!--  END "work-view"  -->
        </div>
    </div>
</div>
<script src="./tablero/sharethis.js.descarga" id="sharethis-script"></script>
<iframe src="./tablero/portal.html" id="st_gdpr_iframe" title="GDPR Consent Management" style="width: 0px; height: 0px; position: absolute; left: -5000px;"></iframe>
@endsection
@section('scripts')
<script src="http://localhost/telepuerto/public/js/tablero/application.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection
<!-- JavaScript customed-->
@section('customjs')
<script src="{{ asset('js/tablero/dragThis.js') }}"></script>
<script src="{{ asset('js/tablero/change_view_components.js?v3.7') }}"></script>
@endsection