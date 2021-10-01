<?php include 'header.php'; ?>




<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cssexistencias/css/bootstrap.min.css">
  	<link rel="stylesheet" href="cssexistencias/css/estilos.css">

    <title>Estado de cuenta</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>




<style media="screen">
.imagen {

      background: url('mcbross3.png');
      background-repeat: no-repeat;
      background-position: center;
    }
</style>



  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5 pt-5">


          <header class="row">
      			<div class="col">
      				<h1>Estado de cuenta</h1>
      				<p>mcbross</p>
      			</div>
      		</header>

      		<section class="contenedor-main row ">
      			<main class="imagen col-md-6">
      				<h2>CREDITO DEL CLIENTE</h2>
      				<p class="d-none d-md-block"></p>
      				<p class="d-block d-md-none"></p>
              <div class="form-check form-switch">

                <p></p>
                <p></p>
                <input type="checkbox" name="switch-3" class="form-check-input" id="switch-3">
                <label for="switch-3" class="form-check-label">Activar credito</label>
      			<!--	<p>Guarda las existencias y muestra las existencias del sistema </p>-->

      				<p> Recuerda no dejar ningun campo en blanco</p>




<p></p>

<form >

  <div class="row justify-content-right mt-1 pt-1">


                  <div class="columna col-8 col-lg-4">
                    <label for="nombreProductos" class="">Limite de credito</label></div>
                    <div class="columna col-8 col-lg-4">
                    <input type="text" class="form-control" id="limite de credito" placeholder="Limite de credito" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
                  </div>
  </div>




  <div class="row justify-content-right mt-1 pt-1">


                  <div class="columna col-8 col-lg-4">
                    <label for="FechaCorte" class="">fecha de corte</label></div>
                    <div class="columna col-8 col-lg-4">
                    <input type="date" class="form-control" id="FechaCorte" placeholder="Limite de credito" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
                  </div>
  </div>









<p></p>


              <div class=" columna  col-12 " style="text-align:center">

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">


                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                    <path
                      d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z">
                    </path>
                  </svg>
                  CARGAR


                </button>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"></path>
                    <path
                      d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z">
                    </path>
                  </svg>

                  LIMPIAR </button>


                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"></path>
                  </svg>
                  CANCELAR</button>


              </div>
            </main>

      			<aside class="col-md-6">




      				<h3>Saldo en CREDITO</h3>
      			<!--	<p class="d-none d-md-block">mcbross </p>
      				<p class="d-block d-md-none">mcbross </p> -->
<p></p>
                            <div class="row overflow">


                                          <div class="columna col-5 col-lg-3 ">
                                                <label for="Existencias Actuales" >Cliente</label>  </div>

                                                      <div class="columna col-4 col-lg-7 ">
                                                <input type="text" class="form-control" id="Nombreclienteedocuenta" placeholder="nombre del cliente" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

                                          </div>

                            </div>
<div class="row overflow">


              <div class="columna col-5 col-lg-3 ">
                    <label for="Existencias Actuales" >Limite Actual</label>  </div>

                          <div class="columna col-5 col-lg-3 ">
                    <input type="number" class="form-control" id="Limite Actual" placeholder="$3000" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

              </div>
              <div class="columna col-5 col-lg-3 ">
                    <label for="Existencias Actuales" > - Total Pagado</label>  </div>

                          <div class="columna col-4 col-lg-3 ">
                    <input type="number" class="form-control" id="total pagado" placeholder="$3000" onkeydown="llenadoSelectivo TablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

              </div>



</div>

            <div class="row justify-content-center ">

                    <div class="columna col-4  lg-4">
                    <label for="precioCompra" class=""> = Limite Disponible</label></div>
                    <div class="columna   col-4 col-lg-4 "style="text-align:center">
                    <input type="number" class="form-control" id="Limite disponible" placeholder="limite Disponible" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">
                    </div>




            </div>


            <p></p>
              <div class="row">



                                <div class="columna   col-6 col-lg-auto ">
                                  <label for="precioCompra" class="">Proximo Corte</label>
                                </div>
                                <div class="columna   col-6 col-lg-auto ">
                                <input type="date" class="form-control" id="precioCompra" placeholder="Precio compra" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">
                                </div>

              </div>

<p></p>



  <div class=" columna  col-12 " style="text-align:center">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MODALUBICACION">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"></path>
                  <path
                    d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z">
                  </path>
                </svg>

                DESGLOCE </button>


<p></p>
<p></p>


        <div class="row">

            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">


                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                    <path
                      d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z">
                    </path>
                  </svg>
                  PAGAR TODO


                </button>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"></path>
                    <path
                      d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z">
                    </path>
                  </svg>

                  ABONO </button>

          </div>


<!--modal de DESGLOCE -->

<div class="modal fade" id="MODALUBICACION" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DESGLOCE DE EDO CUENTA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!--CODIGO  PARA EL MODAL DESGLOCE -->

<div class="row overflow">


              <div class="columna col-5 col-lg-3 ">
                    <label for="Existencias Actuales" >Cliente</label>  </div>

                          <div class="columna col-4 col-lg-7 ">
                    <input type="text" class="form-control" id="Nombreclienteedocuenta" placeholder="nombre del cliente" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

              </div>

</div>

<div class="row justify-content-right mt-1 pt-1">


                  <table  id="tblEdodeCuenta"   name="tblEdodeCuenta" class=" table table-info table-striped">
                    <thead>
                      <tr >
                        <th scope="">clave cliente</th>
                        <th scope="">num de factura</th>
                        <th scope="">fecha factura</th>
                        <th scope="">fecha Vencimiento</th>
                        <th scope="">Descripcion</th>
                        <th scope="">Saldo</th>

                      </tr>
                    </thead>
                    <tbody  id="tblClientesBody"   name="tblClientesBody">

                    </tbody>
                  </table></div>
                  <hr/>

</div>








<!--FIN  CODIGO -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
        <button type="button" class="btn btn-primary">CARGAR CAMBIOS</button>
      </div>
    </div>
  </div>
</div>
<!--  FIn             modal de UBICACION -->
</div>

</form>
      			</aside>
      	<!--	</section>

      		<section class="row widgets justify-content-between">
      			<div class="col-12 col-md-4 col-lg-3">
      				<p class="d-none d-lg-block">3 Columnas</p>
      				<p class="d-none d-md-block d-lg-none">4 Columnas</p>
      				<p class="d-block d-md-none">12 Columnas</p>

      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      				consequat.</p>
      			</div>

      			<div class="col-12 col-md-4 col-lg-3">
      				<p class="d-none d-lg-block">3 Columnas</p>
      				<p class="d-none d-md-block d-lg-none">4 Columnas</p>
      				<p class="d-block d-md-none">12 Columnas</p>

      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      				consequat.</p>
      			</div>

      			<div class="col-12 col-md-4 col-lg-3">
      				<p class="d-none d-lg-block">3 Columnas</p>
      				<p class="d-none d-md-block d-lg-none">4 Columnas</p>
      				<p class="d-block d-md-none">12 Columnas</p>

      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      				consequat.</p>
      			</div>
      		</section> -->

      		<footer class="row">
      			<div class="col">
      				<h4>mcbross</h4>
      				<p>Existencias  version 1</p>
      			</div>
      		</footer>


    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

  </body>
</html>
