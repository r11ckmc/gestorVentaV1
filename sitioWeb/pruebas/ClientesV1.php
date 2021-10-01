<?php include '../ventasPrueba/header.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clientes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


    <style>
  header {background-color:black; color:white;}
  article {background-color:#f4f4f4; color:black;}
  aside {background-color:#f4f4f4; color:black;}
  .main {background-color:#f4f4f4; color:black;}
  .color1 {background-color:magenta; color:white;}
</style>
  </head>
  <body>
    <div class="container">

        <div class="row justify-content-center mt-5 pt-5">

                <div class="col-md-8">
                    <center>
                  <h1 class="display-10">Informacion del cliente</h1>
                </center>

                  <section class="main row">
                            <article class="col-md-7">


                                  <br>
                                  <div class="row form-group">
                                      <label for="nombre" class="col-form-label col-md-2">Nombres: </label>
                                      <div class="col-md-8">
                                      <input type="text" name="nombre" value="" id="txtnombre" class="form-control col-md-10" required>
                                      <div class="invalid-feedback">
                                          Por favor introduzca el nombre del cliente.
                                        </div>
                                      </div>

                                  </div>
                                  <div class="row form-group">
                                      <label for="apellido" class="col-form-label col-md-2">Apellidos:</label>
                                      <div class="col-md-8">
                                      <input type="text" name="apellido" value="" id="txtapellido" class="form-control col-md-10"  required>
                                      <div class="invalid-feedback">
                                          Por favor introduzca los apellidos del cliente.
                                        </div>
                                      </div>

                                  </div>

                                  <div class="row form-group">
                                      <label for="email" class="col-form-label col-md-2">Mail:</label>
                                      <div class="col-md-8">
                                          <input type="email" name="email" value=" " id="txtemail" class="form-control col-md-10">
                                          <div class="invalid-feedback">
                                              Por favor introduzca un correo valido.
                                            </div>
                                      </div>
                                  </div>
                                  <div class="row form-group">
                                      <label for="Direccion" class="col-form-label col-md-2">Direccion:</label>
                                      <div class="col-md-8">
                                          <input type="direccion" name="direccion" value=" " id="txtdireccion" class="form-control col-md-10" required>
                                          <div class="invalid-feedback">
                                              Por favor introduzca la direccion.
                                            </div>
                                      </div>
                                  </div>
                                  <div class="row form-group">
                                      <label for="familiar" class="col-form-label col-md-2">Telefono:</label>
                                      <div class="col-md-8">
                                          <input type="text" name="familiarFamiliar" value=" " id="txtfamiliar" class="form-control col-md-10" required>
                                          <div class="invalid-feedback">
                                              Por favor introduzca un telefono.
                                            </div>
                                      </div>
                                  </div>
                                  <div class="row form-group">
                                      <label for="taller" class="col-form-label col-md-2">Taller:</label>
                                      <div class="col-md-8">
                                          <input type="text" name="txttaller" value=" " id="txttaller" class="form-control col-md-10">
                                      </div>
                                  </div>


                                  <div class="row form-group">
                                      <label for="txtcp" class="col-form-label col-md-2">C.P. :</label>
                                      <div class="col-md-8">
                                          <input type="text" name="txtcp" value=" " id="txtcp" class="form-control col-md-10">
                                      </div>
                                  </div>


                                  <div class="row form-group">
                                    <label for="txtRFC" class="col-form-label col-md-2">RFC :</label>
                                    <div class="col-md-8">
                                      <input type="text" name="txtRFC" value=" " id="txtRFC" class="form-control col-md-10">
                                    </div>
                                  </div>

                                  <div class="row form-group">
                                      <label for="txtCURP" class="col-form-label col-md-2">CURP:</label>
                                      <div class="col-md-8">
                                          <input type="text" name="txtCURP" value=" " id="txtCURP" class="form-control col-md-10">
                                      </div>
                                  </div>


                                  <div class="row form-group">
                                      <label for="txtestado" class="col-form-label col-md-2">ESTADO:</label>
                                      <div class="col-md-8">
                                          <input type="text" name="txtestado" value=" " id="txtestado" class="form-control col-md-10">
                                      </div>
                                  </div>


                                  <div class="row form-group">
                                      <label for="txtmunicipio" class="col-form-label col-md-2">municipio:</label>
                                      <div class="col-md-8">
                                          <input type="text" name="txtmunicipio" value=" " id="txtmunicipio" class="form-control col-md-10">
                                      </div>
                                  </div>


                                  <div class="row form-group">
                                      <label for="txtRazonsocial" class="col-form-label col-md-2">Razon Social:</label>
                                      <div class="col-md-8">
                                          <input type="text" name="txtRazonsocial" value=" " id="txtRazonsocial" class="form-control col-md-10">
                                      </div>
                                  </div>


                            </article>

                            <aside class="col-md-5">
                        <h3>Foto de taller</h3> <br>
                          <div class="row form-group">
                          <img src="talleer1.PNG" width="200"  id="imgPreview"  class="my-4" alt="se espera imagen de persona">
                        </div>
                        <!-- Archivo Adjunto -->
                        <div class="row form-group">
                            <div class="col-md-8">
                                <input type="file" name="archivo" value="" id="archivo" class="form-control-file" accept="image/png, image/jpeg" required>
                            </div>
                        </div>
                    <div class="row form-group">
                    <label class="btn btn-info">
                    <input type="radio" name="gender" id="hombre" value="hombre" autocomplete="on" checked=true> Hombre
                    </label>
                    </div>
                    <div class="row form-group">
                    <label class="btn btn-info active">
                    <input type="radio" name="gender" value="mujer" autocomplete="off"> Mujer
                    </label>

                            </aside>
                          </section>
                          <center>
                            <br>
                          <button type="button" onclick="EnviarDatos()"  class="btn btn-info  btn-block">Enviar</button>
                          </center>
                        </div>
            </div>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/clientejs.js"></script>
  </body>
</html>
