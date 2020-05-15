<div class="card-body">
  <div class="card-header py-3">
    <h2 class="m-0 font-weight-bold text-secondary text-center text-uppercase seccionTitulo"></h2>
  </div>

  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong><i class="far fa-lightbulb"></i> Actualización!</strong> Dar clic en el número de nómina para acceder a mas opciones del empleado.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <div class="table-responsive">
    <table id="tablaSeguimiento" class="table table-sm table-bordered table-hover bg-gray-200 text-center text-uppercase" cellspacing="4">
      
      <thead class="font-weight-bold bg-info">
        <tr>
          <th scope="col">Nómina</th>
          <th scope="col">Empleado</th>
          <th scope="col">Area</th>
          <th scope="col">Puesto</th>
          <th scope="col">Comisión</th>
          <th scope="col">Sucursal comision</th>
          <th scope="col">Daltonismo</th>
          <th scope="col">Agudeza</th>
          <th scope="col">Tarjeta</th>
          <th scope="col">Entrega tarjeta</th>
          <th scope="col">Entrega contrato</th>
          <th scope="col">Guia</th>
          <th scope="col">Entrega personal</th>
          <th scope="col">Fin contrato</th>
        </tr>
      </thead>
      <tbody id="dataTable">
      </tbody>
    </table>

    <div id="loadingIndicator" class="text-center mt-4">
      <div class="h1 spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">...</span>
      </div>
      <div class="h1 spinner-grow text-success" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">...</span>
      </div>
      <div class="h1 spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">...</span>
      </div>
    </div>

    <div class="alert alert-danger d-none text-uppercase text-center h4" id="alertaM" role="alert">
      No hay información disponible.
    </div>
  </div>
</div>