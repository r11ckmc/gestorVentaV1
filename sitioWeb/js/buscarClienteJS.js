

var datosclientes=[{}];
const btnModificar='<button class="noselect"  id="'+i+'" onclick="Credito(this)">'+
'<span class="text">Modificar credito</span><span class="icon">'+
'<i class="material-icons" style="color:white;">'+
'settings</i></span></button>';
$(document).ready( function () {
    obtenerClientes(
      {
        IDCompania:2
      });

} );
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
  $("#tblProductosBody").empty();


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
                  '<button class="noselect"  id="'+i+'" onclick="Credito(this)">'+
                  '<span class="text">Modificar credito</span><span class="icon">'+
                  '<i class="material-icons" style="color:white;">'+
                  'settings</i></span></button>'
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


function redirecionar(datos={}){
  let urlRedirect="https://mc-bros.com.mx/pruebas/Credito/Credito.php?compania=2&clave="+
  datos.clave+"&nombre="+datos.nombre+"&apellido="+datos.apellido;
//alert(urlRedirect);
  window.open(urlRedirect,'_blank','width=500,height=600,menubar=no,toolbar=no, status=no,scrollbars=yes')

  //location.href =urlImprimir;
}
