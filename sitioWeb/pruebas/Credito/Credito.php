<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario Construcción</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script type="text/javascript" src="../../js/jquery-3.6.0.min.js">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-md-7">
                <h1 class="display-4">CREDITO</h1>
                <hr class="bg-info">

                <form id="formulario" novalidate enctype="multipart/form-data">

                  <div class="row form-group">
                      <label for="clave" class="col-form-label col-md-3">Clave:</label>
                      <div class="col-md-6">
                          <?print "<input type='text' maxlength='4'  name='pcalificacion' value='".$_GET['clave']."' id='txtpclave' class='form-control-file' required>"?>

                      </div>
                  </div>

                  <div class="row form-group">
                      <label for="calificacion" class="col-form-label col-md-3">Nombre :</label>
                      <div class="col-md-6">
                          <?print "<input type='text' maxlength='4'  name='pcalificacion' value='".$_GET['nombre']."' id='txtnombre' class='form-control-file' required>"?>
                      </div>
                  </div>





                  <div class="row form-group">
                      <label for="calificacion" class="col-form-label col-md-3">Apellidos :</label>
                      <div class="col-md-6">
                        <?print "<input type='text' maxlength='4'  name='pcalificacion' value='".$_GET['apellido']."' id='txtapellido' class='form-control-file' required>"?>
                      </div>
                  </div>

                  <div class="row form-group">
                      <label for="calificacion" class="col-form-label col-md-3">calificacion :</label>
                      <div class="col-md-6">
                          <input type="text" maxlength="4"  name="txtpcalificacion" value="3" id="txtpcalificacion" class="form-control-file" required>
                      </div>
                  </div>

                    <div class="row form-group">
                        <label for="limite de CREDITO" class="col-form-label col-md-3">Limite de Credito:</label>
                        <div class="col-md-6">
                            <input type="number" name="txtlimitedecredito" value="3000" id="txtplimiteCredito" class="form-control" required>
                        </div>


                    </div>
                    <div class="row form-group">
                        <label for="dias" class="col-form-label col-md-3">Dias aviles para depositar :</label>
                        <div class="col-mITO-6">
                            <input type="number" name="pdias" value="15" id="txtpdias" class="form-control" required>
                        </div>
                    </div>



                  <!--  <div class="row form-group">
                      <label for="calificacion" class="col-form-label col-md-3">Taller :</label>
                      <div class="col-md-6">
                        <input type="number" maxlength="4"  name="pcalificacion" value="" id="txttaller" class="form-control-file" required>
                      </div>
                    </div>-->
                    <button type="button" onclick="EnviarDatos()" class="btn btn-info ">Enviar</button>
                </form>
            </div>
        </div>
    </div>



    <!-- modal -->

    <div class="modal fade" id="ModalMensaje" tabindex="-1" role="dialog" aria-labelledby="ModalMensajeLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalMensajeLabel">Aviso</h5>
          </button>
        </div>
        <div class="modal-body">
          <div style="text-align: center;">
          <p id="pMensaje"></p>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrrarModal()">Close</button>
          <button type="button" class="btn btn-primary" onclick="cerrrarModal()">Aceptar</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

    <script src="../js/creditoJS.js"></script>

  </body>
</html>
