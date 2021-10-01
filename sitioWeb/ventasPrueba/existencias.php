<?php include 'header.php'; ?>




<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cssexistencias/css/bootstrap.min.css">
  	<link rel="stylesheet" href="cssexistencias/css/estilos.css">

    <title>Existencias</title>

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
      				<h1>MCBROSS</h1>
      				<p>Taller y Refaccionaria</p>
      			</div>
      		</header>

      		<section class="contenedor-main row align-items-center">
      			<main class="imagen col-md-6">
      				<h2>MAIN MCBROSS</h2>
      				<p class="d-none d-md-block"></p>
      				<p class="d-block d-md-none"></p>
      				<p>Guarda las existencias y muestra las existencias del sistema </p>

      				<p> Recuerda no dejar ningun campo en blanco</p>





<form >
                  <div class="row justify-content-right mt-1 pt-1 columna col-8 col-lg-6">
                    <label for="nombreProductos" class="visually-hidden">Proveedor</label>
                    <input type="text" class="form-control" id="nombreProductos" placeholder="nombre del articulo" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
                  </div>
                  <div class=" row justify-content-right mt-1 pt-1 columna col-8 col-lg-6 ">
                    <label for="CodigoBarras" class="visually-hidden">CodigoBarras</label>
                    <input type="text" class="form-control" id="CodigoBarras" placeholder="codigo de barras" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

                  </div>

                  <div class="row justify-content-right mt-1 pt-1 columna col-6 col-lg-4">
                    <label for="txtNuevaCantidad" class="visually-hidden">Nueva Cantidad</label>
                    <input type="number" class="form-control" id="txtNuevaCantidad" placeholder="Nueva Cantidad" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
                  </div>
                  <div class="row justify-content-right mt-1 pt-1 columna col-8 col-lg-6 ">
                    <label for="MarcaParte" class="visually-hidden">MarcaParte</label>
                    <input type="text" class="form-control" id="MarcaParte" placeholder="Marca de Parte" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

                  </div>



                  <div class="row justify-content-right mt-1 pt-1 columna col-8 col-lg-6 ">
                    <label for="MarcaParte" class="visually-hidden">Proveedor</label>
                    <input type="text" class="form-control" id="proveedor" placeholder="Proveedor" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

                  </div>


                                    <div class="row justify-content-right mt-1 pt-1 columna col-8 col-lg-6 ">
                                      <label for="MarcaParte" class="visually-hidden">codigo de sat</label>
                                      <input type="text" class="form-control" id="codigo SAT" placeholder="codigo SAT" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

                                    </div>



                  <div class=" row justify-content-center mt-1 pt-1">


                                    <div class="columna   col-4 col-lg-4 ">
                                      <label for="precioCompra" class="">Precio compra</label>
                                      <input type="number" class="form-control" id="precio compra" placeholder="Precio compra jurimo" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">
                                      </div>



                                      <div class=" columna  col-4 " style="text-align:center">

                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModPrecioCustom">


                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                            <path
                                              d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z">
                                            </path>
                                          </svg>
                                          Personalizar precio
                                          </button>





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
      				<h3>Existencias</h3>
      				<p class="d-none d-md-block">mcbross </p>
      				<p class="d-block d-md-none">mcbross </p>


              <div class="columna col-8 col-lg-6 ">
                    <label for="Existencias Actuales" >Existencias Actuales</label>
                    <input type="text" class="form-control" id="Existencias Actuales" placeholder="Existencias actuales" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

              </div>
              <div class="row">


                                <div class="columna   col-6 col-lg-4 ">
                                  <label for="precioCompra" class="">Precio Compra Anterior</label>
                                  <input type="number" class="form-control" id="precioCompra" placeholder="Precio  en compra anterior" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">
                                  </div>
                                  <div class="columna col-6 col-lg-4 ofsset-1 ">
                                    <label for="MarcaParte" class="">Descuento en porcentaje</label>
                                    <input type="number" class="form-control" id="precioDescAplicado" placeholder="descuento en compra" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">
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

                UBICACION </button>


<!-- inicia modales-->


<!-- Inicia modal control Precio custom -->
    <div
  					class="modal fade"
  					id="ModPrecioCustom"
  					tabindex="-1"
  					aria-hidden="true"
  					aria-labelledby="ModPrecioCustomLabel"
  					data-bs-backdrop="static"
  				>
  					<!-- Caja de dialogo -->
  					<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
  						<!-- Contenido de la caja -->
  						<div class="modal-content">
  							<!-- Encabezado de la caja -->
  							<div class="modal-header">
  								<h5 class="modal-title">PRECIO PERSONALIZADO</h5>
  								<button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
  							</div>

  							<!-- Cuerpo de la caja -->
  							<div class="modal-body">
  								<div style="height: 1000px">

                      <!--Cuerpo del modal-->



                  <?php include 'modales/ModPrecioCustom.php'; ?>





                      <!--Fin del Cuerpo del modal-->

  								</div>
  							</div>

  							<!-- Pie de pagina de la caja -->
  							<div class="modal-footer">
  								<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
  								<button type="button"onclick="ConfiguracionDatosEnvioV2()" class="btn btn-primary">Acepto</button>
  							</div>
  						</div>
  					</div>
  				</div>
<!-- termina  modal control credito -->




<!--modal de UBICACION -->

<div class="modal fade" id="MODALUBICACION" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UBICACION DEL PRODUCTO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!--CODIGO  PARA EL MODAL -->



<div class="row justify-content-right mt-1 pt-1">

  <div class="columna col-auto col-auto">
    <input type="text" class="form-control" id="Almacen" placeholder="Almacen" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
  </div>
<div class="columna col-auto col-auto">
  <label for="Almacen" class="">Almacen</label></div>


</div>





<div class="row justify-content-right mt-1 pt-1">

  <div class="columna col-auto col-auto">
    <input type="text" class="form-control" id="Area" placeholder="Area" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
  </div>
<div class="columna col-auto col-auto">
  <label for="Area" class="">Area</label></div>


</div>





<div class="row justify-content-right mt-1 pt-1">

  <div class="columna col-auto col-auto">
    <input type="text" class="form-control" id="Pasillo" placeholder="Pasillo" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
  </div>
<div class="columna col-auto col-auto">
  <label for="Pasillo" class="">Pasillo</label></div>


</div>





<div class="row justify-content-right mt-1 pt-1">

  <div class="columna col-auto col-auto">
    <input type="text" class="form-control" id="Anaquelcuadro" placeholder="Anaquel o cuadro" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
  </div>
<div class="columna col-lg-2 col-auto">
  <label for="Anaquel" class="">Anaquel o cuadro</label></div>


</div>






<div class="row justify-content-right mt-1 pt-1">

  <div class="columna col-auto col-auto">
    <input type="text" class="form-control" id="nivel" placeholder="Nivel" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
  </div>
<div class="columna col-auto col-auto">
  <label for="nivel" class="">Nivel</label></div>


</div>




<div class="row justify-content-right mt-1 pt-1">

  <div class="columna col-auto col-auto">
        <textarea class="form-control" id="DescripcionGeneral" rows="2"></textarea>
  </div>
<div class="columna col-auto col-auto">
  <label for="DescripcionGeneral" class="">Descripcion General</label></div>


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

<!--Fin de los Modales-->

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
<?php include 'footer.php'; ?>
