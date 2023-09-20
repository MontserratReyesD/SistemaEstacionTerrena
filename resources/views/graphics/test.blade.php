  <div class="row">
    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Camara</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          
          <!-- Stream video via webcam -->
          <div class="video-wrap">
          <video id="video" playsinline autoplay></video>
        </div>
        <!-- Trigger canvas web API -->
        <!-- Webcam video snapshot -->
        
      </div>
      <div class="mt-4 text-center small">
        <div class="controller">
          <button id="snap">Capture</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Campo magnético </h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
       <canvas id="myChart"  width="668" height="210" style="display: block; width: 845px; height: 169px;  z-index: 999; top: 6px; left: 50px;" class="chartjs-render-monitor"></canvas>      
      
      <input type="button" value="Add Data" onclick="adddata()"> 
      
    </div>
  </div>
</div>
</div>
</div>