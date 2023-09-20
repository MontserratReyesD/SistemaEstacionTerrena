    <div class="col-lg-4 mb-2">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Captara de datos</h6>
          <div class="dropdown no-arrow">
            <span class="mr-2">
              <i id="console-event" class="fas fa-circle text-secondary"></i>
            </span> <!-- https://www.bootstraptoggle.com/ -->
            <input class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
              type="checkbox"                  
              data-offstyle="danger"
              data-size="small"          
              data-toggle="toggle"  
              id = "toggle-one";
              data-on="<i class='fa fa-play'></i> Play"
              data-off="<i class='fa fa-pause'></i> Pause"
              checked >
          </div>
        </div>
        <!-- Card Body -->        
        {!! Form::open(array('route' => 'data.guardar','id'=>'formulario_textarea', 'autocomplete'=>'off','enctype'=>'multipart/form-data')) !!}
        <div class="card-body">
          <div class="form-group">
            <textarea id="allData" rows="6"  class="form-control" name="jsondata"
            style="font-weight: 300;padding-left: 0.8rem;resize: none;"
            readonly></textarea>
          </div>
          <hr>
          <div class="row  align-items-center">
            <div class="col mr-2">
              <input type="button" value="Limpiar" id="clear" class="btn btn-secondary">
            </div>
            
            <div class="col-auto"  >
              <button class="btn btn-danger btn-icon-split btn-user " id="save" onclick="confirmSendData()">
              <span class="icon text-white-50">
                <i class="fas fa-save"></i>
              </span>              
              <span class="text">Guardar</span>
              </button>
            </div>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
