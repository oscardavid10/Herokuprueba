<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="shortcut icon" href="images/icon/agencia1.ico" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css"
    rel="stylesheet" type="text/css" />

    <script src="js/jquery-3.3.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <style>
        .inputstyle{
          font-size: 8pt;
        }
        .modal_text{
          font-size: 1em;
        }
        .form-control1 {
          display: block;
          width: 100%;
          padding: 0.375rem 0.75rem;
          font-size: .8rem;
          line-height: 1.5;
          color: #495057;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid #ced4da;
          border-radius: 0.25rem;
          transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .col_oculta{
          display: none;
        }
        .form-error2 {
          display: block;
          color: #b94a48;
          margin-top: 5px;
          margin-bottom: 10px;
          line-height: 140%;
        }
    </style>
    <title>Motormexa</title>
  </head>
	<body class="text-center" data-gr-c-s-loaded="true">
	<!-----------------------------------Empieza el contenido---------------------------------------->


    <form id="form_acceso" action="" class="form-signin" onsubmit=" return false">
      <div id="acceso" >
      <img class="mb-4" src="images/Fondo.png" alt="" width="250" height="120">
      <!--<h1 class="h3 mb-3 font-weight-normal">Ingresa al sistema</h1>-->
      <label for="inputEmail" class="sr-only">Usuario:</label>
      <input type="text" name="usuario" id="username" class="form-control" placeholder="Usuario" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Contraseña:</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
      <br>
      </div>
      <input name="" type="submit" value="Aceptar" id="save" class="btn btn-lg btn-primary btn-block"></input>
      <div id="error" class="form-error2"></div>

    </form>


<!-----------------------------------Termina el contenido---------------------------------------->

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>


    $('#form_acceso').on('submit', function(e){

      var user = $("#username").val();
      var pass = $("#inputPassword").val();

      if(user != '' && pass != ''){
        // alert();
        $.ajax({
          url: "funciones/ValidarAccesoUser.php",
          type: "POST",
            data: {"user":user,"pass":pass},
            success: function(datas) {

              if(datas > 0){
                location.reload();
              }else{
                $("#error").html('Por favor valida el usuario y la contraseña');
              }

            }
        });
      }


    return false;
    });


    </script>
  </body>
</html>