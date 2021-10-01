


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
  	<link rel="stylesheet" href="css/estilos.css">
    < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin = "anonymous" >

  </script>

  <title>venta</title>
  <style media="screen">
    .row {
      /*background: #e8e8e8 margin-top:40px;
      margin-bottom: 40px;

*/

    }


    .imagen {

      background: url('mcbross3.png');
      background-repeat: no-repeat;
      background-position: center;
    }
  </style>



</head>

<body class="imagen">






<?php include 'header.php'; ?>


  <div class="text-dark ">





    <div class="columna container">

      <p class="h1">venta</p>



      <div class="col-auto"><label for="nombre" class="">clave:</label> </div>
<div class="row" style="text-align:center">



      <div class="columna  col-6  col-lg-3 ">    <input type="password" name="txtClave" value="" id="txtClave" class="form-control" placeholder="clave" >

      </div>


      <div class="columna  col-6  col-lg-3 ">
      <input type="text" name="txtcliente" value="" id="txtcliente" class="form-control" placeholder="Mostrador" disabled >

    </div>



</div>




<div class="row">


        <div class="col-auto">

            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalSearchClient">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                </svg>
                Buscar cliente
              </button>

        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-outline-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                </svg>
                Aceptar
              </button>
       </div>


        <div class="col-3 lg 4">

            <button type="button" class="btn btn-outline-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"></path>
            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"></path>
            </svg>
                          actualizar
                        </button>
        </div>

  <!--7777777777777777777777777777777-->
</div>


        <div class="row g-3">
            <div class="columna col-auto">
            <label for="nombreProductos" class="visually-hidden">Proveedor</label>
            <input type="text" class="form-control" id="nombreProductos" placeholder="nombre del articulo" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
            </div>
             <div class="columna col-auto">
            <label for="CodigoBarras" class="visually-hidden">CodigoBarras</label>
            <input type="text" class="form-control" id="CodigoBarras" placeholder="codigo de barras" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

            </div>


        </div>
          <div class="columna col-1">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ScanModal">

                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-upc-scan" viewBox="-1 0 20 20">
                   <path
                     d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2    0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z">
                      </path>
                  </svg>
                 <span class="">scan</span>

            </button>

          </div>
          <div class="columna col-3 ">
          </div>










          <div class="columna  col-12 " style="text-align:right">


            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Mayorista</button>

            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Taller</button>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Publico</button>


          </div>




          <div class="columna  col-12 " style="text-align:right">
                  <h5 style="display: none;">sub total <span id="txtTotal">0</span></h5>
                  <h5 style="display: none;">iva <span id="txtIva">0</span></h5>
                  <h2>total <span id="txtTotalConIva">0</span></h2>
          </div>




  <div class="columna  col-12 " style="text-align:center">

            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="mandarAmodal()">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                <path
                  d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z">
                </path>
              </svg>
              Venta
            </button>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"></path>
                <path
                  d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z">
                </path>
              </svg>

              Cotizar </button>


            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"></path>
              </svg>
              Cancelar</button>


  </div>
          <p></p>

        </form>



        <!--aside-->

<div class="table-responsive"style="height:250px;overflow:auto">

       <table id="tblProductos" name="tblProductos" class="table table-info table-striped">
          <thead>
            <tr>
              <th scope="col">codigo de barras</th>
              <th scope="col">existencia</th>
              <th scope="col">nombre</th>
              <th scope="col">proveedor</th>
              <th scope="col-md-6">precioUnitario</th>
              <th scope="col">cantidad</th>
              <th scope="col">Accion</th>

            </tr>
          </thead>
          <tbody id="tblProductosBody" name="tblProductosBody">

          </tbody>
        </table>
</div>

        <hr />

  <table id="tblCompra" name="tblCompra" class="table table-info table-striped">
          <thead>
            <tr>





              <th scope="col">codigo de barras</th>
              <th scope="col">nombre</th>
              <th scope="col">proveedor</th>
              <th scope="col">precio</th>
              <th scope="col">cantidad</th>
              <th scope="col">precio Total</th>
              <th scope="col">Accion</th>

            </tr>
          </thead>
          <tbody id="tblCompraBody" name="tblCompraBody">

          </tbody>
  </table>
         </div>




    <!-- inicio modal  Buscar cliente -->
    <div class="modal fade" id="modalSearchClient" tabindex="-1" role="dialog" aria-labelledby="modalSearchClientLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class=" modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalSearchClientLabel">Buscar Cliente</h5>
            </button>
          </div>
          <div class="modal-body">
            <div style="text-align: center;">


              <!-- Switch -->

          				<div class="form-check form-switch">
          					<input type="checkbox" name="switch-3" class="form-check-input" id="switch-3">
          					<label for="switch-3" class="form-check-label">Switch 3</label>
          				</div>
          			</div>

              <form class="row g-3">
                <div class="col-auto">
                  <label for="nombreProductos" class="visually-hidden">Nombre del cliente</label>
                  <input type="text" class="form-control" id="nombrecliente" placeholder="nombre del cliente" onchange="" onkeyup="" ondblclick="">
                </div>
                <div class="col-auto">
                  <label for="CodigoBarras" class="visually-hidden">Clave del cliente</label>
                  <input type="text" class="form-control" id="txtclavedelcliente" placeholder="Clave del cliente" onkeydown="" onchange="">
                </div>


                </div>
                <div class="col-auto">
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



                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrrarModalClientes()">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="ftnquitarpreProducto()">Aceptar</button>
                <button type="button" class="btn btn-outline-danger"  onclick="refrescarCliente()"  >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"></path>
  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"></path>
</svg>
                actualizar
              </button>


              <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
</svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Agregar cliente
              </font></font></button>



            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>

    </div>

    <!--fin modal Buscar cliente-->



    <!-- inicio modal  borrar -->
    <div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="modalErrorLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalErrorLabel">Advertencia</h5>
            </button>
          </div>
          <div class="modal-body">
            <div style="text-align: center;">
              <img src="../myimg/errorImg.jpg" / width="100px" style="">
              <p>
              <h3>Desea quitar este producto</h3>
              </p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrrarModal()">Close</button>
            <button type="button" class="btn btn-primary" onclick="ftnquitarpreProducto()">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    <!--fin modal borrar-->


    <!-- modal  ScanModal -->
    <div class="modal fade" id="ScanModal" tabindex="-1" role="dialog" aria-labelledby="ScanModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ScanModalLabel">Escaner</h5>
            </button>
          </div>
          <div class="modal-body">
            <div style="text-align: center;">
              <div id="qr-reader" style="width: 300px"></div>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrrarModalScan()">Close</button>
            <button type="button" class="btn btn-primary" onclick="cerrrarModalScan()">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    <!--fin modal ScanModal-->

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
                    <div>
                        <p> precio total <span id="pcantidadTotaFinalModal">0</span><p>
                        <div class="form-group">
                            <input type="number" onkeydown="calcularMoto(this)" onkeyup="calcularMoto(this)" onchange="calcularMoto(this)" class="form-control" id="txtMonto" aria-describedby="txtMontohelp" placeholder="introcuzca monto">
                            <small id="txtMontohelp" class="form-text text-muted">introduzca la cantidad recibida por el cliente.</small>
                      </div>
                      <p> cambio <span id="pcambio">0</span><p>

                    <div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="ConfiguracionDatosEnvio()">Imprimir</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>

    <script type="text/javascript" src="../js/VentasV1js.js"></script>





</body>

</html>
