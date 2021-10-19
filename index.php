<?php
//Rquiero el archivo conexion.php 
//Hago una instancia de la clase Conexio
//Requiero el archivo administrador.controlador.php que es donde contiene las validaciones
require_once "model/conexion.php";
$conexion = new Conexion();
require_once "controller/administrador.controlador.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Nueva Realidad</title>
    <link rel="shortcut icon" href="assets/imagenes/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/estilos.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.css">
</head>

<body>
    <?php if(isset($_SESSION['usuario'])){ header('location: dashboard.php'); }else{ ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9" id="contenido__uno"></div>
            <div class="col-lg-3" id="contenido__dos">
                <div class="contenido__interno">
                    <br>
                    <div class="logo">
                        <img class="img-fluid mx-auto d-block" src="assets/imagenes/senasennova.png" width="350">
                    </div>
                    <div class="contenido_login">
                        <p>Su usuario corresponde al tipo de documento</p>
                    </div>
                    <div class="bs-component <?php echo ($mensaje == '') ? 'd-none' : 'd-block' ?>">
                        <div class="alert alert-dismissible alert-danger">
                            <button class="close" type="button" data-dismiss="alert">x</button>
                            <a class="alert-link" href="#"><?php echo $mensaje; ?></a>
                        </div>
                    </div>
                    <div id="formulario__inter">
                        <!--Formulario de login-->
                        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="form-group mt-4">
                                <label for="">Usuario: (requerido)</label>
                                <select class="form-control" name="tipo__persona" id="tipo__persona" style="font-size: 16px;">
                                    <option value="tipo">Seleccione tipo</option>
                                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                    <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                                    <option value="Cedula de extranjeria">Cedula de extranjeria</option>
                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Contraseña: (requerido)</label>
                                <div class="row">
                                    <div class="col-md-10" id="pass__input">
                                        <input class="form-control" placeholder="Ingresar contraseña..." type="password" name="password" id="password" required>
                                    </div>
                                    <div class="col-md-2" id="pass_show" style="margin-left: -21px;">
                                        <button class="btn mx-auto" id="btn__mostrar" onclick="mostrar()" type="button"><i class="fa fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <button class="btn btn-primario w-100" name="btnAccion" value="Ingreso" type="submit">Acceder</button>
                            </div>
                        </form>
                        <!--Fin formulario de login-->
                    </div>
                    <div class="footer-d">
                        <p class="font-weight-bold">Servicio Nacional de Aprendizaje SENA | SENNOVA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</body>
<script src="assets/redirect.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    function mostrar() {
        var tipo = document.getElementById("password");
        if (tipo.type == 'password') {
            tipo.type = 'text';
        } else {
            tipo.type = 'password';
        }
    }
</script>

</html>