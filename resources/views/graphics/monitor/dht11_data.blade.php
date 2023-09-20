<!-- Area Chart -->
<div class="col-lg-3 mb-2">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Fuente: DHT22</h6>
      <a class="btn btn-primary btn-sm" href="{{route('datos.clima')}}"><i class="fas fa-eye text-white  fa-1x text-gray-300"></i></a>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div class="  text-center">
        <h3 id="temperature" class="text-primary display-4 "></h3>
        <div class="w-100"></div>
        <h3 id="humedad" class="text-success display-5 " title = "Humedad Relativa"></h3>
        <div class="w-100"></div>
        <h3 id="sensasion" class="text-secondary display-6 "></h3>
      </div>
      <div class="pt-1 small ">
        <div class="row justify-content-center">
          <div class="col-md-auto">
            <span class="pr-2">
              <i class="fas fa-circle text-primary"></i> Temperatura
            </span>
          </div>
          <div class="col-md-auto">
            <span class="pr-2">
              <i class="fas fa-circle text-success "></i> Humedad
            </span>
          </div>
          <div class="col-md-auto">
            <span class="pr-2">
              <i class="fas fa-circle text-secondary"></i> Sensación
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Pie Chart -->