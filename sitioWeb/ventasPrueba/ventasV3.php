<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>







    <title>VENTA</title>
  </head>
  <body>




<div class="text-dark ">

    <div class="columna container">
        <!--main-->
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

  </div> <!--fin del row-->
        <!--fin del main-->


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
</div><!--fin cabla-->
        <hr />


<div class="table-responsive"style="height:250px;overflow:auto">

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

  <hr>


</div><!--fin cabla-->


    </div><!--fin container-->



<!--Inician los modales-->





<!--FIN      Inician los modales-->



</div><!--fin de div dark apariencia-->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>

        <script type="text/javascript" src="../js/VentasV1js.js"></script>


  </body>
</html>
