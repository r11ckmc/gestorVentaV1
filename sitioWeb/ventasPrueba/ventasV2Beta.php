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

    <title>venta</title>
<style media="screen">

.row{
background: #e8e8e8;

}
.columna {
background: #f2f2f2;
border: 1px solid #4d5061;
}
</style>



  </head>
  <body>


    <div class="container">

      <p class="h1">venta</p>

        <main role="main" class="pb-3">
          <form class="row g-3">
            <div class="columna col-auto">
              <label for="nombreProductos" class="visually-hidden">Proveedor</label>
              <input type="text" class="form-control" id="nombreProductos" placeholder="nombre del articulo" onchange="llenadoSelectivoTabla()" onkeyup="llenadoSelectivoTabla()" ondblclick="llenadoSelectivoTabla()">
            </div>
            <div class="columna col-auto">
              <label for="CodigoBarras" class="visually-hidden">CodigoBarras</label>
              <input type="text" class="form-control" id="CodigoBarras" placeholder="codigo de barras" onkeydown="llenadoSelectivoTablaCodigoBarras()" onchange="llenadoSelectivoTablaCodigoBarras()">

            </div>



            <div class="columna col-1"  >  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ScanModal">

              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-upc-scan" viewBox="-1 0 20 20">
                              <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"></path>
                            </svg>
                            <span class="">scan</span>






            </button>

</div>

<div class="row columna col-5" style="align-content:space-around;" >


  <div class="columna col-auto ">
                               <button  type="button" class="btn btn-info col-auto"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                mayorista</button>
                              </div>
                              <div class="columna col-auto ">
                                 <button type="button" class="btn btn-info col-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  taller</button>
                                </div>
                                <div class="columna col-auto ">
                                   <button style="float: right;" type="button" class="btn btn-info col-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    publico</button>
                                  </div>

</div>













            <div class="columna  col-12 " style="text-align:right" >
              <h5 >sub total <span id="txtTotal">0</span></h5>
              <h5 >iva <span id="txtIva">0</span></h5>
              <h2 >total <span id="txtTotalConIva">0</span></h2>
            </div>



            <div class="columna col-auto">
             <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Terminar venta</button> </div>
              <div class="columna col-auto ">
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                cotizacion</button> </div>

                <div class="columna col-auto">
                 <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  cancelar venta</button>
                </div>
<p></p>

          </form>

            <table  id="tblProductos"   name="tblProductos" class="table table-info table-striped">
              <thead>
                <tr >
                  <th scope="col">codigo de barras</th>
                  <th scope="col">existencia</th>
                  <th scope="col">nombre</th>
                  <th scope="col">proveedor</th>
                  <th scope="col-md-6">precioUnitario</th>
                  <th scope="col">cantidad</th>
                  <th scope="col">Accion</th>

                </tr>
              </thead>
              <tbody  id="tblProductosBody"   name="tblProductosBody">

              </tbody>
            </table>
            <hr/>

            <table  id="tblCompra"   name="tblCompra" class="table table-info table-striped">
              <thead>
                <tr >
                  <th scope="col">codigo de barras</th>
                   <th scope="col">nombre</th>
                   <th scope="col">proveedor</th>
                  <th scope="col">precio</th>
                  <th scope="col">cantidad</th>
                  <th scope="col">precio Total</th>
                  <th scope="col">Accion</th>

                </tr>
              </thead>
              <tbody  id="tblCompraBody"   name="tblCompraBody">

              </tbody>
            </table>



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
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>

   <script>
   dtaEror=0;
     datosProductos=[{}];
     datosCarrito=[{}];
     datosVenta=[{}];
     datosTemp={};
     ventaTotal=0;
     var iva=0;
     var cantidadTemp;
     descuento=0;
     function onScanSuccess(decodedText, decodedResult) {
       $('#CodigoBarras').val(decodedText);
       llenadoSelectivoTablaCodigoBarras(decodedText);
       $("#ScanModal").modal('hide');

}
var html5QrcodeScanner = new Html5QrcodeScanner(
	"qr-reader", { fps: 10, qrbox: 250 });

html5QrcodeScanner.render(onScanSuccess);

      $(document).ready( function () {
          obtenerProductos(
            {
              IDCompania:2
            });

      } );

  function onKeyUp(event) {
    var keycode = event.keyCode;
    if(keycode == '13'){

    }
  }

      function ConfiguracionDatosEnvio(){
        let compania =2;
        let cliente=$('#txtnombre').val();
        let direccion=$('#txtdireccion').val();
        let telefono=$('#txttelefono').val();
        let correo=$('#txtemail').val();
        let usuario=1;
        let productos='';
        for(var i=1;i<datosCarrito.length;i++){
            productos+=datosCarrito[i].descripcion+
              '>'
              +datosCarrito[i].precio+
              '>'
              +datosCarrito[i].cantidad+
              '><';
        }
        EnviarVentaABaseDeDatos({
          compania :parseInt(compania),
          total :parseFloat(ventaTotal),
          cliente :cliente,
          direccion :direccion,
          telefono :telefono,
          correoElectronico : correo,
          userUpdate : parseInt(usuario),
          Productos :productos
        });
}
function EnviarVentaABaseDeDatos(dta={}) {
  const URL = 'https://www.invisar.com.mx/GestorRefaccionaria/api/Controllers/Ventas/VentaTotalController.php';
  fetch(URL, {
    method: 'POST',
    body: JSON.stringify(dta),
    headers: {
        "Content-Type": "application/json"
    }
}).then((response) => response.json()
  .then(data => {
      debugger
      //datosProductos=data.result;
      redirecionar(data.result);
  })
);
}

function redirecionar(id=[{}]){
  let urlImprimir="https://www.invisar.com.mx/GestorRefaccionaria/api/Controllers/Ventas/ImpresionVenta.php?compania=2&nota="+id[0].nota;

  window.open(urlImprimir,'_blank','width=500,height=600,menubar=no,toolbar=no, status=no,scrollbars=yes')

  //location.href =urlImprimir;
}

function cerrrarModal() {
  $("#modalError").modal('hide');
}

function cerrrarModalScan() {
  $("#ScanModal").modal('hide');
}

function buscarCodigoBarras(){
  obtenerProductosCB(
    {
      IDCompania:2,
      codigo:document.getElementById('CodigoBarras').value
    }
  )
}
      function obtenerProductosCB(dta={}) {
        const URL = 'https://www.invisar.com.mx/GestorRefaccionaria/api/Controllers/Ventas/ListaVentasController.php';
        fetch(URL, {
          method: 'POST',
          body: JSON.stringify(dta),
          headers: {
              "Content-Type": "application/json"
          }
    }).then((response) => response.json()
        .then(data => {
            debugger
            //datosProductos=data.result;
            llenarTablaProductos(data.result);
        })
    );
}

      function obtenerProductos(dta={}) {
        const URL = 'https://www.invisar.com.mx/GestorRefaccionaria/api/Controllers/Ventas/ListaVentasController.php';
        fetch(URL, {
          method: 'PUT',
          body: JSON.stringify(dta),
          headers: {
              "Content-Type": "application/json"
          }
    }).then((response) => response.json()
        .then(data => {
            debugger
            datosProductos=data.result;
            //llenarTablaProductos(data.result);
        })
    );
}

  function llenarTablaProductos(data =[{}]){
    var tabla = "";
    var nombre = 'tarifa';
    var dataIntable = document.getElementById('tblProductosBody');
    $("#tblProductosBody").empty();

    tabla += "<tr><th>" +
    '<input type="text" class="form-control" id="txtCodigo0"placeholder="cantidad" value="">'
      + "</th>" +
      "<th>" +
      "---"
        + "</th>"+
        "<th>"+
        '<input type="text" class="form-control" id="txtdescripcion"placeholder="cantidad" value="">'
         + "</th>"+
        "<th>" +
        '<input type="text" class="form-control" id="txtprecio"placeholder="cantidad" value="">'
        + "</th>"+
        "<th>" +
        '<input type="text" class="form-control" id="txtcantidad0"placeholder="cantidad">'
         + "</th>"+
        "<th>"+
        '<button type="button" class="btn btn-outline-primary" id="0" onclick="llenarCarrito(this)">agregar</button>'

        +"</th>"+
        "</tr>"
    if (true) {

        for (let i = 0; i < data.length; i++) {
            if (true)
            {

                tabla += "<tr><th>" + data[i].codigoProveedor + "</th>" +
                "<th>" + data[i].existencias + "</th>"+
                    "<th>" + data[i].descripcion + "</th>"+
                    "<th>" + data[i].proveedor + "</th>"+

                    "<th>" + (data[i].precio*data[i].aumento*data[i].iva).toFixed(2) + "</th>"+
                    "<th>" +
                    '<input type="text" class="form-control" id="txtcantidad'+data[i].idProductos+'"placeholder="cantidad" value="1">'
                     + "</th>"+
                    "<th>"+
                    '<button type="button" class="btn btn-outline-primary" id="'+data[i].idProductos+'" onclick="llenarCarrito(this)">agregar</button>'

                    +"</th>"+
                    "</tr>"
            }
        }

        dataIntable.innerHTML = tabla;
    }

}

function llenadoSelectivoTabla(){
  var tabla = "";
  var nombre = 'tarifa';

  var dataIntable = document.getElementById('tblProductosBody');
  $("#tblProductosBody").empty();
  var nombre = document.getElementById('nombreProductos').value;
  var codigo = document.getElementById('CodigoBarras').value;
  //console.log(nombre);

  let expresion = new RegExp(`${nombre}.*`, "i");
let datosFiltrados = datosProductos.filter(datosProductos => expresion.test(datosProductos.descripcion));

for(let i=0;i<datosFiltrados.length;i++){
    if (true)
    {

      tabla += "<tr><th>" + datosFiltrados[i].codigoProveedor + "</th>" +
      "<th>" + datosFiltrados[i].existencias + "</th>"+
          "<th>" + datosFiltrados[i].descripcion + "</th>"+
          "<th>" + datosFiltrados[i].proveedor + "</th>"+

          "<th>" +
          '<input type="text" class="form-control" id="txtprecio'+
                  datosFiltrados[i].idProductos+
                  '"placeholder="cantidad" value="'
                  +(datosFiltrados[i].precio*datosFiltrados[i].aumento*datosFiltrados[i].iva).toFixed(2)+
                  '">'
           + "</th>"+
          "<th>" +
          '<input type="text" class="form-control" id="txtcantidad'+datosFiltrados[i].idProductos+'"placeholder="cantidad" value="1">'
           + "</th>"+
          "<th>"+
          '<button type="button" class="btn btn-outline-primary" id="'+datosFiltrados[i].idProductos+'" onclick="llenarCarrito(this)">agregar</button>'

          +"</th>"+
          "</tr>";

    }
    if(i>=50){
      break;
    }


}



dataIntable.innerHTML = tabla;
}


function llenadoSelectivoTablaCodigoBarras(){
  var tabla = "";
  var nombre = 'tarifa';


  var dataIntable = document.getElementById('tblProductosBody');
  $("#tblProductosBody").empty();
  var codigo = document.getElementById('CodigoBarras').value;

      tabla += "<tr><th>" +
      '<input type="text" class="form-control" id="txtCodigo0"placeholder="codigo de barras" value="'+codigo+'">'
        + "</th>" +
        "<th>" +
        "---"
          + "</th>"+
          "<th>"+
          '<input type="text" class="form-control" id="txtdescripcion0"placeholder="descripcion" value="">'
           + "</th>"+
           "<th>" +
           '<input type="text" class="form-control" id="txtproveedor0"placeholder="Proveedor" value="">'
             + "</th>"+
          "<th>" +
          '<input type="number" class="form-control" id="txtprecio0"placeholder="precio con iva" value="">'
          + "</th>"+
          "<th>" +
          '<input type="number" class="form-control" id="txtcantidad0"placeholder="cantidad">'
           + "</th>"+
          "<th>"+
          '<button type="button" class="btn btn-outline-primary" id="0" onclick="llenarCarritoCustom()">agregar</button>'

          +"</th>"+
          "</tr>";
          $("#txtcantidad0").focus();
for(let i=0;i<datosProductos.length;i++){

    if ((datosProductos[i].codigoProveedor==codigo)||(datosProductos[i].codigoBarras==codigo))
    {



      tabla += "<tr><th>" + datosProductos[i].codigoProveedor + "</th>" +
      "<th>" + datosProductos[i].existencias + "</th>"+
          "<th>" + datosProductos[i].descripcion + "</th>"+
          "<th>" + datosProductos[i].proveedor + "</th>"+
          "<th>" +
           '<input type="text" class="form-control" id="txtprecio'+
                   datosProductos[i].idProductos+
                   '"placeholder="cantidad" value="'
                   +           (datosProductos[i].precio*datosProductos[i].aumento*datosProductos[i].iva).toFixed(2) +
                   '">'
           + "</th>"+
          "<th>" +
          '<input type="text" class="form-control" id="txtcantidad'+datosProductos[i].idProductos+'"placeholder="cantidad" value="1">'
           + "</th>"+
          "<th>"+
          '<button type="button" class="btn btn-outline-primary" id="'+datosProductos[i].idProductos+'" onclick="llenarCarrito(this)">agregar</button>'
          +"</th>"+
          "</tr>"
          $("#"+'txtcantidad'+datosProductos[i].idProductos+'').focus();

          break;
    }

}
dataIntable.innerHTML = tabla;
}

function llenarCarritoCustom(){
  var tabla = "";
  var nombre = 'tarifa';
  let codigoBarrasTemp=$('#txtCodigo0').val();
  let descripcionTemp =$('#txtdescripcion0').val();
  let proveedorTemp =$('#txtproveedor0').val();
  let cantidadTemp = parseInt($('#txtcantidad0').val());
  let precioTemp =  parseFloat($('#txtprecio0').val());
  var dataIntable = document.getElementById('tblCompraBody');

        for(let j=0;j<datosCarrito.length;j++)
        {
            if(datosCarrito[j].idProductos==codigoBarrasTemp)
            {

              var validador=true;
              datosCarrito[j].cantidad+=parseInt(cantidadTemp);
              datosCarrito[j].precioTotal=
                parseFloat(parseFloat(datosCarrito[j].precioTotal)
                +parseFloat(cantidadTemp)).toFixed(2);
              break;
            }
        }
        if(validador!=true){
        datosTemp = {
          idProductos:codigoBarrasTemp,
          codigoProveedor:codigoBarrasTemp,
          descripcion:descripcionTemp,
          proveedor:proveedorTemp,
          precio:(precioTemp).toFixed(2),
          cantidad:cantidadTemp,
          precioTotal:(precioTemp*cantidadTemp).toFixed(2)
        };
        datosCarrito.push(datosTemp);
      }


    ventaTotal=0;
      for(let i=1;i<datosCarrito.length;i++)
{

  ventaTotal+=parseFloat(datosCarrito[i].precioTotal);
  tabla += "<tr><th>" + datosCarrito[i].codigoProveedor + "</th>" +
  "<th>" + datosCarrito[i].descripcion + "</th>"+
  "<th>" + datosCarrito[i].proveedor + "</th>"+
  "<th>" + datosCarrito[i].precio + "</th>"+
      "<th>" + datosCarrito[i].cantidad + "</th>"+
      "<th>" + datosCarrito[i].precioTotal + "</th>"+

      "<th>"+
      '<button type="button" class="btn btn-danger" id="'+datosCarrito[i].idProductos+'" onclick="ftnquitarProducto(this)">quitar</button>'

      +"</th>"+
      "</tr>"
}


$("#tblProductosBody").empty();
$("#tblCompraBody").empty();

$("#CodigoBarras").val('');

$("#CodigoBarras").focus();
var ivaT=parseFloat(datosProductos[0].iva-1);
iva=parseFloat(ventaTotal*ivaT).toFixed(2);
document.getElementById("txtTotal").textContent=parseFloat(ventaTotal-iva).toFixed(2);
document.getElementById("txtIva").textContent=iva;
document.getElementById("txtTotalConIva").textContent=parseFloat(ventaTotal).toFixed(2);


dataIntable.innerHTML = tabla;

}


function llenarCarrito(dato){
  var tabla = "";
  var nombre = 'tarifa';
  let precioTemp =  parseFloat($('#txtprecio'+dato.id+'').val());
  var dataIntable = document.getElementById('tblCompraBody');


  for(var i=0;i<datosProductos.length;i++){

      if ((datosProductos[i].idProductos==dato.id))
      {
        let cantidad =parseInt($('#' + "txtcantidad"+dato.id + '').val());

        cantidadTemp=
          parseFloat(precioTemp*datosProductos[i].aumento*cantidad).toFixed(2);
          var validador=false;
        for(let j=0;j<datosCarrito.length;j++)
        {
            if(datosCarrito[j].idProductos==dato.id)
            {

              var validador=true;
              datosCarrito[j].cantidad+=parseInt(cantidad);
              datosCarrito[j].precioTotal=
                parseFloat(parseFloat(datosCarrito[j].precioTotal)
                +parseFloat(cantidadTemp)).toFixed(2);
              break;
            }
        }
        if(validador!=true){
        datosTemp = {
          idProductos:datosProductos[i].idProductos,
          codigoProveedor:datosProductos[i].codigoProveedor,
          descripcion:datosProductos[i].descripcion,
          proveedor:datosProductos[i].proveedor,
          precio:(precioTemp).toFixed(2),
          cantidad:cantidad,
          precioTotal:(precioTemp*cantidad).toFixed(2)
        };
        datosCarrito.push(datosTemp);
      }
      }
    }
    ventaTotal=0;
      for(let i=1;i<datosCarrito.length;i++)
{

  ventaTotal+=parseFloat(datosCarrito[i].precioTotal);
  tabla += "<tr><th>" + datosCarrito[i].codigoProveedor + "</th>" +
  "<th>" + datosCarrito[i].descripcion + "</th>"+
  "<th>" + datosCarrito[i].proveedor + "</th>"+
  "<th>" + datosCarrito[i].precio + "</th>"+
      "<th>" + datosCarrito[i].cantidad + "</th>"+
      "<th>" + datosCarrito[i].precioTotal + "</th>"+

      "<th>"+
      '<button type="button" class="btn btn-danger" id="'+datosCarrito[i].idProductos+'" onclick="ftnMostrarModalError(this)">quitar</button>'

      +"</th>"+
      "</tr>"
}


$("#tblProductosBody").empty();
$("#tblCompraBody").empty();

$("#CodigoBarras").val('');

$("#CodigoBarras").focus();
var ivaT=parseFloat(datosProductos[0].iva-1);
iva=parseFloat(ventaTotal*ivaT).toFixed(2);
document.getElementById("txtTotal").textContent=parseFloat(ventaTotal-iva).toFixed(2);
document.getElementById("txtIva").textContent=iva;
document.getElementById("txtTotalConIva").textContent=parseFloat(ventaTotal).toFixed(2);


dataIntable.innerHTML = tabla;

}

function ftnMostrarModalError(data){
  dtaEror=data;
  $("#modalError").modal('show');
}

function ftnquitarpreProducto(){
  //alert('hola');
  ftnquitarProducto(dtaEror);
  $("#modalError").modal('hide');

}

function ftnquitarProducto(dta){
  datosCarritotemp=[{}];
  var tabla = "";
  var dataIntable = document.getElementById('tblCompraBody');

  for(let i=1;i<datosCarrito.length;i++){
      if ((datosCarrito[i].idProductos!=dta.id))
      {
        datosTemp = {
          idProductos:datosCarrito[i].idProductos,
          codigoProveedor:datosCarrito[i].codigoProveedor,
          descripcion:datosCarrito[i].descripcion,
          proveedor:datosCarrito[i].proveedor,
          precio:(datosCarrito[i].precio*datosProductos[i].aumento).toFixed(2),
          cantidad:datosCarrito[i].cantidad,
          precioTotal:(datosCarrito[i].precio*datosProductos[i].aumento*datosCarrito[i].cantidad).toFixed(2)
        };
        console.log("quitarpriducto "+i);
        datosCarritotemp.push(datosTemp);
      }
    }

    if(datosCarritotemp!="undefined")
    {
      datosCarrito=datosCarritotemp;

    }
    else {
      datosCarrito=[{}];
    }
    ventaTotal=0;
      for(let i=1;i<datosCarrito.length;i++)
{

  ventaTotal+=parseFloat(datosCarrito[i].precioTotal);
  tabla += "<tr><th>" + datosCarrito[i].codigoProveedor + "</th>" +
  "<th>" + datosCarrito[i].descripcion + "</th>"+
  "<th>" + datosCarrito[i].proveedor + "</th>"+
  "<th>" + datosCarrito[i].precio + "</th>"+
      "<th>" + datosCarrito[i].cantidad + "</th>"+
      "<th>" + datosCarrito[i].precioTotal + "</th>"+

      "<th>"+
      '<button type="button" class="btn btn-danger" id="'+datosCarrito[i].idProductos+'" onclick="ftnMostrarModalError(this)">quitar</button>'

      +"</th>"+
      "</tr>"
}


$("#tblProductosBody").empty();
$("#tblCompraBody").empty();

var ivaT=parseFloat(datosProductos[0].iva-1);
iva=parseFloat(ventaTotal*ivaT).toFixed(2);
document.getElementById("txtTotal").textContent=parseFloat(ventaTotal).toFixed(2);
document.getElementById("txtIva").textContent=iva;
document.getElementById("txtTotalConIva").textContent=parseFloat(ventaTotal*datosProductos[0].iva).toFixed(2);
$("#CodigoBarras").empty();
$("#CodigoBarras").focus();
dataIntable.innerHTML = tabla;
}


    </script>

  </body>
</html>
