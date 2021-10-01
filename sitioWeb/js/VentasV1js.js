
dtaEror=0;
idCliente=0;
tipoVenta=0;
aumento=1.25;
nombrecliente='mostrador'
direccionCliente='----';
telefonoCliente='----';
  datosProductos=[{}];
  datosCarrito=[{}];
  datosVenta=[{}];
  datosTemp={};
  ventaTotal=0;

  diseniobotonQuitar='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">'+
  '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>'+
  '<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>'+
  '</svg>Quitar';
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
         obtenerClientes(
           {
             IDCompania:2
           });

   } );



   function refrescarCliente(){
     obtenerClientes(
       {
         IDCompania:2
       });

   }

function onKeyUp(event) {
 var keycode = event.keyCode;
 if(keycode == '13'){

 }
}
function mandarAmodal()
{
  ventaTotal;
  var datatotalModal = document.getElementById('pcantidadTotaFinalModal');
  datatotalModal.innerHTML = '<p>'+ventaTotal+'</p>';

}
function calcularMoto(dta){
  ventaTotal;
  var datatotalModal = document.getElementById('pcantidadTotaFinalModal');
  datatotalModal.innerHTML = '<p>'+ventaTotal+'</p>';

  if(parseFloat(ventaTotal)<parseFloat(dta.value)){
    var datainCambio = document.getElementById('pcambio');
    let cambioarecibir=parseFloat(dta.value)-parseFloat(ventaTotal);
    datainCambio.innerHTML = '<p>'+cambioarecibir.toFixed(2)+'</p>';

  }
}


function ConfiguracionDatosEnvioV2(){
  let compania =2;
  let cliente=nombrecliente;
  let usuario=1;
  let productos='';
  for(var i=1;i<datosCarrito.length;i++){
      productos+=datosCarrito[i].descripcion+
        '>'
        +datosCarrito[i].precio+
        '>'
        +datosCarrito[i].cantidad+
        '>'
        +datosCarrito[i].idProductos+
        '><';
  }
  EnviarVentaABaseDeDatosV2({
    compania :parseInt(compania),
    total :parseFloat(ventaTotal),
    idCliente:idCliente,
    abono:parseFloat($('#txtAbono').val()).toFixed(2),
    tipoVenta:tipoVenta,
    userUpdate : parseInt(usuario),
    Productos :productos
  });
}

   function ConfiguracionDatosEnvio(){
     let compania =2;
     let cliente=nombrecliente;
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
       cliente :nombrecliente,
       direccion :direccionCliente,
       telefono :telefonoCliente,
       correoElectronico : correo,
       userUpdate : parseInt(usuario),
       Productos :productos
     });
}


function EnviarVentaABaseDeDatosV2(dta={}) {
  console.log(dta);
const URL = 'https://www.invisar.com.mx/GestorRefaccionaria/api/Controllers/Ventas/VentaTotalV2Controller.php';
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
   redirecionarV2(data.result);
})
);
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



function redirecionarV2(id=[{}]){
let urlImprimir="https://www.invisar.com.mx/GestorRefaccionaria/api/Controllers/Ventas/impresionVentaV2.php?compania=2&nota="+id[0].nota;

window.open(urlImprimir,'_blank','width=500,height=600,menubar=no,toolbar=no, status=no,scrollbars=yes')

}


function redirecionar(id=[{}]){
let urlImprimir="https://www.invisar.com.mx/GestorRefaccionaria/api/Controllers/Ventas/ImpresionVenta.php?compania=2&nota="+id[0].nota;

window.open(urlImprimir,'_blank','width=500,height=600,menubar=no,toolbar=no, status=no,scrollbars=yes')

}

function cerrrarModal() {
$("#modalError").modal('hide');
}
function cerrrarModalClientes() {
  alert('htst');
$("#modalSearchClient").modal('hide');
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
         if(datosCarrito[j].codigoProveedor==codigoBarrasTemp)
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
       idProductos:0,
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
   '<button type="button" class="btn btn-danger" id="'+datosCarrito[i].idProductos+'" onclick="ftnquitarProducto(this)">'+diseniobotonQuitar+'</button>'

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
   '<button type="button" class="btn btn-danger" id="'+datosCarrito[i].idProductos+'" onclick="ftnMostrarModalError(this)">'+diseniobotonQuitar+'</button>'

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
datosCarritotemp=[{}]; ventaTotal=0;

ventaTotal=0;

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
       precio:(datosCarrito[i].precio).toFixed(2),
       cantidad:datosCarrito[i].cantidad,
       precioTotal:(datosCarrito[i].precio*datosProductos[i].aumento*datosCarrito[i].cantidad).toFixed(2)
     };
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


var botonQuitar='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">'+
'<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>'+
'<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>'+
'</svg>Quitar';
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

function obtenerClientes(dta={}) {
  const URL = 'https://www.invisar.com.mx/GestorRefaccionaria/api/Controllers/Clientes/ObtenerListaClientes.php';
  fetch(URL, {
    method: 'POST',
    body: JSON.stringify(dta),
    headers: {
        "Content-Type": "application/json"
    }
}).then((response) => response.json()
  .then(data => {
      debugger
      datosclientes=data.result;
      llenarTablaClientes(data.result);
  })
);
}



function llenarTablaClientes(data =[{}]){
  var tabla = "";
  var nombre = 'tarifa';
  var dataIntable = document.getElementById('tblClientesBody');
  $("#tblClientesBody").empty();


  if (true) {

      for (let i = 0; i < data.length; i++) {
          if (true)
          {

              tabla += "<tr><th>" + data[i].nombre + "</th>" +
              "<th>" + data[i].apellidos + "</th>"+
                  "<th>" + data[i].mail + "</th>"+
                  "<th>" + data[i].telefono + "</th>"+
                  "<th>" + data[i].taller + "</th>"+
                  "<th>"+
                  '<button type="button" class="btn btn-outline-primary" id="'+i+'" onclick="AgregarClienteV1(this)">Acepar</button>'

                  +"</th>"+
                  "</tr>"
          }
      }

      dataIntable.innerHTML = tabla;
  }

}

function Credito(data)
{
    //alert(data[data.id].nombre);
    //datosclientes[data.id].nombre;
    redirecionar({
      clave:datosclientes[data.id].clave,
      nombre:datosclientes[data.id].nombre,
      apellido:datosclientes[data.id].apellidos
    })
}


function cambiarestadoventa() {
  if ($('#tipoventa').prop('checked') ) {
    tipoVenta=parseInt(1);
  }
else{
  tipoVenta=parseInt(0);

  }

}

function AgregarClienteV1(data){
  idCliente=datosclientes[data.id].id;
  $('#txtClave').val(datosclientes[data.id].clave);
  $('#txtcliente').val(datosclientes[data.id].nombre+' '+datosclientes[data.id].apellidos);
  direccionCliente=datosclientes[data.id].direccion;
  telefonoCliente=datosclientes[data.id].telefono;
  nombrecliente=datosclientes[data.id].nombre+' '+datosclientes[data.id].apellidos;
  //$("#modalSearchClient").modal('hide');
  $('#modalSearchClient').modal('toggle');
  //$("#modalSearchClient .close").click()
  $( "#tipoventa" ).prop( "disabled", false );



}
