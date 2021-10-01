<?

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <title>Buscar cliente</title>
  </head>
  <body>


    <div class="container">

      <p class="h1">Selecionar cliente</p>

        <main role="main" class="pb-3">
          <form class="row g-3">
            <div class="col-auto">
              <label for="nombreProductos" class="visually-hidden">Nombre del cliente</label>
              <input type="text" class="form-control" id="nombrecliente" placeholder="nombre del cliente" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
            </div>
            <div class="col-auto">
              <label for="CodigoBarras" class="visually-hidden">Clave del cliente</label>
              <input type="text" class="form-control" id="txtclavedelcliente" placeholder="Clave del cliente" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-outline-primary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-upc-scan" viewBox="-1 0 20 20">
                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"></path>
              </svg>
              <span class="">scan</span>
              </button>
            </div>


            </div>

          </form>

            <table  id="tblClientes"   name="tblClientes" class="table table-info table-striped">
              <thead>
                <tr >
                  <th scope="col">nombre</th>
                  <th scope="col -md-6">apellidos</th>
                  <th scope="col">mail</th>
                  <th scope="col">Telefono</th>
                  <th scope="col-md-6">taller</th>
                  <th scope="col">Accion</th>

                </tr>
              </thead>
              <tbody  id="tblClientesBody"   name="tblClientesBody">

              </tbody>
            </table>
            <hr/>




<!-- modal error borrar -->
<div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="modalErrorLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="modalErrorLabel">Advertencia</h5>
      </button>
    </div>
    <div class="modal-body">
      <div style="text-align: center;">
      <img src="../myimg/errorImg.jpg"/ width="100px" style="">
      <p> <h3>Desea quitar este producto</h3></p>
    </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrrarModal()">Close</button>
      <button type="button" class="btn btn-primary" onclick="ftnquitarpreProducto()">Aceptar</button>
    </div>
  </div>
</div>
</div>
<!--fin modal error-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos del cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <!--!      aqui vas a introducir el codigo said-->
  <!--!  a gueno-->



  <div class="container">
          <div class="row justify-content-center mt-10 pt-5">
              <div class="col-md-7">

                  <form id="formulario" novalidate enctype="multipart/form-data">
                    <div class="row form-group">
                        <label for="nombre" class="col-form-label col-md-4">clave:</label>
                        <div class="col-md-8">
                            <input type="text" name="txtnombre" value="" id="txtClave" class="form-control" required>
                        </div>
                      <div class="row form-group">
                          <label for="nombre" class="col-form-label col-md-4">Nombre:</label>
                          <div class="col-md-8">
                              <input type="text" name="txtnombre" value="" id="txtnombre" class="form-control" required>
                          </div>
                      </div>
                      <div class="row form-group">
                          <label for="Telefono" class="col-form-label col-md-4">Telefono:</label>
                          <div class="col-md-8">
                              <input type="text" name="txttelefono" value="" id="txttelefono" class="form-control" required>
                          </div>


                      <div class="row form-group">
                          <label for="direccion" class="col-form-label col-md-4">Direccion:</label>
                          <div class="col-md-8">
                              <input type="direccion" name="txtdireccion" value="" id="txtdireccion" class="form-control" required>
                          </div>
                      </div>

                      <div class="row form-group">
                          <label for="email" class="col-form-label col-md-4">E-mail:</label>
                          <div class="col-md-8">
                              <input type="email" name="txtemail" value="" id="txtemail" class="form-control" required>
                          </div>

                  </form>
              </div>
          </div>
      </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="ConfiguracionDatosEnvio()">Imprimir</button>
        <script src="js/buscarClienteJS.js"></script>

      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
