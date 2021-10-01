<!-- Switch -->

    <div class="form-check form-switch">
      <input type="checkbox" name="switch-3" class="form-check-input" id="switch-3">
      <label for="switch-3" class="form-check-label">Switch 3</label>
    </div>


  <form class="row g-3">
      <div class="col-6">
        <label for="nombreProductos" class="visually-hidden">Nombre del cliente</label>
        <input type="text" class="form-control" id="nombrecliente" placeholder="nombre del cliente" onchange="" onkeyup="" ondblclick="">
      </div>
      <div class="col-6 >
        <label for="CodigoBarras" class="visually-hidden">Clave del cliente</label>
        <input type="text" class="form-control" id="txtclavedelcliente" placeholder="Clave del cliente" onkeydown="" onchange="">
      </div>
</form>



<div class="columna col-12" style="overflow:auto;">



                <table  id="tblClientes"   name="tblClientes" class=" table table-info table-striped">
                  <thead>
                    <tr >
                      <th scope="col-4">nombres</th>
                      <th scope="col-4">apellidos</th>
                      <th scope="col-4">mail</th>
                      <th scope="col-4">Telefono</th>
                      <th scope="col-4">taller</th>
                      <th scope="col-4">Accion</th>

                    </tr>
                  </thead>
                  <tbody  id="tblClientesBody"   name="tblClientesBody">

                  </tbody>
                </table>



  </div>
                <hr/>
