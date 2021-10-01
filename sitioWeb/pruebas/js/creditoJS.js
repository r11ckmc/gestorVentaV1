var pidcompania;
var pidcliente;
var plimiteCredito;
var pdias;
var pcalificacion;
var puserUpdate;
var pclave;



function cerrrarModal() {
  $("#ModalMensaje").modal('hide');
}

function EnviarVentaABaseDeDatos(dta={}) {
  console.log(dta);
  const URL = 'https://www.invisar.com.mx/GestorRefaccionaria/api/Controllers/Credito/CreditoController.php';
  fetch(URL, {
    method: 'POST',
    body: JSON.stringify(dta),
    headers: {

        "Content-Type": "application/json"
    }
}).then((response) => response.json()
  .then(data => {
      debugger
      $("#ModalMensaje").modal('show');

      let texto = '<h3>'+data.result+'</h3>';
      var objectp = document.getElementById('pMensaje');
      objectp.innerHTML = texto;

  })
);
}

function EnviarDatos(){
ValidarFormulario();
    EnviarVentaABaseDeDatos({
      pidcompania:pidcompania,
      pdias:pdias,
      pcalificacion:pcalificacion,
      pclave:pclave,
      puserUpdate:puserUpdate
    });
}

function ValidarFormulario()
{
   pidcompania =2;
   pidcliente =$('#txtpidcliente').val();
   plimiteCredito=$('#txtplimiteCredito').val();
   pdias=$('#txtpdias').val();
   pcalificacion=$('#txtpcalificacion').val();
   pclave=$('#txtpclave').val();
   puserUpdate:1;


}
