<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts
        <script src="{{ asset('js/app.js') }}" defer></script> -->
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('node_modules/startbootstrap-sb-admin/dist/css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('node_modules/vanillatop/dist/vanillatop.min.css') }}" rel="stylesheet">        
        <link href="{{ asset('node_modules/jquery-confirm/css/jquery-confirm.css') }}" rel="stylesheet">                
        @yield('styles')        
        <!-- Scripts -->
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('node_modules/vanillatop/dist/vanillatop.min.js') }}"></script>    
        <script src="{{ asset('node_modules/jquery-confirm/js/jquery-confirm.js') }}"></script>            
        <!-- Custom scripts for all pages-->
        @yield('scriptsHeader')
    </head>
    <body id="page-top" class="sb-nav-fixed">
        <div id="app">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Estación Terrena HYDRA
                    </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar ..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <!-- Right Side Of Navbar -->
                 
                    </div>
                </div>
            </nav>
            <!-- Page Wrapper -->
            <div id="layoutSidenav">
                <!-- Sidebar -->
                @include('menu.sidebar')
                <!-- End of Sidebar -->
                <!-- Content Wrapper -->
                    <!-- Main Content -->
                    <div id="layoutSidenav_content">
                        <!-- End of Topbar <main class="py-4"> -->
                        <main >
                            @yield('content')
                        </main>
                        <!--</main>-->
                        <!-- Begin Page Content -->
                        <!-- /.container-fluid -->
                                            <!-- Footer -->
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; StringMx 2023</div>
                            <div>
                                <a href="#">Politica de privacidad</a>
                                &middot;
                                <a href="#">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
                    <!-- End of Footer -->
                    </div>
                    <!-- End of Main Content -->

                <!-- End of Content Wrapper -->
                <!-- Scroll to Top Button-->
                <a href="#" class="vanillatop"></a>
            </div>
            <!-- Scripts -->
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>        
        <script src="{{ asset('node_modules/startbootstrap-sb-admin/js/scripts.js') }}"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- Page level plugins scripts fix down menu-->
        <!--<script src="{{ asset('js/bootstrap.min.js') }}"  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
        <!--Scripts EXTRAS-->
        @yield('scripts')            
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("#top").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<!-- Tool Tip Global -->

        @yield('customjs')
<script src="{{ asset('js/tool-tip-global.js?1.0') }}" ></script>
    </body>
</html>