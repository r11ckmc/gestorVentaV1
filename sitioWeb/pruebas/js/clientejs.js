var idcompania;
var nombre;
var apellidos;
var telefono;
var mail;
var direccion;
var sexo;
var taller;
var habilitado;
var foto ="";
var razoSocial;
var estado;
var municipio;
var cp;
var rfc;
var curp;


var userUpdate;
var imgbase64;

function EnviarVentaABaseDeDatos(dta={}) {
  console.log(dta);
  const URL = 'https://www.invisar.com.mx/GestorRefaccionaria/api/Controllers/Clientes/agegar.php';
  fetch(URL, {
    method: 'POST',
    body: JSON.stringify(dta),
    headers: {

        "Content-Type": "application/json"
    }
}).then((response) => response.json()
  .then(data => {
      debugger
      alert(data.result)
      //redirecionar(data.result);

  })
);
}





$("#archivo").change(function(event){
	var files = event.target.files, file;

	if (files && files.length > 0) {
                 // Obtener el archivo cargado actualmente
	     file = files [0]; // Acción de verificación del tamaño del archivo
	    if(file.size > 1024 * 1024 * 2) {
		      alerta ('¡El tamaño de la imagen no puede exceder los 2 MB!');
		     return false;
	    }
	     // Obtener herramienta de URL de ventana
	    var URL = window.URL || window.webkitURL;
	    var imgURL = URL.createObjectURL(file);
	    $("#imgPreview").attr("src",imgURL);
	    //$("#imgDiv").show();
	     // Use la siguiente oración para liberar el servo para esta URL en la memoria, y la URL no será válida después de ejecutar
	    // URL.revokeObjectURL(imgURL);
	    }
      //getBase64Image(files);

      console.log(files[0]);
      toDataURL(imgURL, function(imgbase64) {
        foto=imgbase64;
        foto=imgbase64.replace('data:image/jpeg;base64,','');

        console.log(foto);

      })

      //console.log(imgbase64);
});



function toDataURL(url, callback) {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    var reader = new FileReader();
    reader.onloadend = function() {
      callback(reader.result);
    }
    reader.readAsDataURL(xhr.response);
  };
  xhr.open('GET', url);
  xhr.responseType = 'blob';
  xhr.send();
}


function EnviarDatos(){
ValidarFormulario();
    EnviarVentaABaseDeDatos({
      idcompania:idcompania,
      nombre:nombre,
      apellidos:apellidos,
      telefono:telefono,
      mail:mail,
      direccion:direccion,
      sexo:sexo,
      taller:taller,
      habilitado:habilitado,
      foto:foto,
       razoSocial:razoSocial,
       estado:estado,
       municipio:municipio,
       cp:cp,
       rfc:rfc,
       curp:curp,
       userUpdate:userUpdate

    });
  //console.log(dto);
}

function ValidarFormulario()
{
   idcompania =2;
   nombre =$('#txtnombre').val();
   apellidos=$('#txtapellido').val();
   telefono=$('#txtfamiliar').val();
   mail=$('#txtemail').val();
   direccion=$('#txtdireccion').val();
   taller=$('#txttaller').val();
    razoSocial=$('#txtRazonsocial').val();
    estado=$('#txtestado').val();
    municipio=$('#txtmunicipio').val();
    cp=$('#txtcp').val();
    rfc=$('#txtRFC').val();
    curp=$('#txtCURP').val();
   habilitado=1;
   userUpdate=1;

   if( $('#hombre').prop('checked') ) {
      sexo=1;
}
else{
  sexo=0;
}
}
