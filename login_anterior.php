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

<body id="body__index">
    <div class="content">
        <div class="container">
            <div class="bs-component <?php echo ($mensaje == '') ? 'd-none' : 'd-block' ?>">
                <div class="alert alert-dismissible alert-danger">
                    <button class="close" type="button" data-dismiss="alert">x</button>
                    <a class="alert-link" href="#"><?php echo $mensaje; ?></a>
                </div>
            </div>
            <!--login-->
            <div class="row mx-auto shadow bg-white" id="form__login">
                <div class="col-lg-7 col-sm-12 col-xs-12 mx-auto" id="contenido">
                    <h1 id="titulo">La Nueva Realidad</h1>
                    <p class="text-justify" id="content__1">El presente instrumento fué diseñado y estructurado por SENNOVA como parte del proyecto La Nueva Realidad: Microempresarios Casanareños Frente al Primer Año de Convivencia con el Covid-19. Instrumento de Diagnóstico, Análisis de Impacto e Identificación de Estrategias Innovadoras para la Recuperación del Sector, la información obtenida será utilizada para efectos académicos y su divulgación estará orientada a la Comunidad Académica SENA.</p>
                    <div class="imagen mx-auto">
                        <a href="#"><img class="img-fluid" id="img__1" src="assets/imagenes/senasennova.png"></a>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-10 mx-auto">
                    <div class="card" id="formulario__registro">
                        <div class="card-body">
                            <h3 class="text-center" id="title__formulario">Iniciar Sesión.</h3>
                            <div id="formulario__inter">
                                <!--Formulario de login-->
                                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                                    <div class="form-group mt-2">
                                        <label for="">Usuario: (requerido)</label>
                                        <select class="form-control" name="tipo__persona" id="tipo__persona" style="font-size: 16px;">
                                            <option value="tipo">Seleccione tipo</option>
                                            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                            <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                                            <option value="Cedula de extranjeria">Cedula de extranjeria</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-2">
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
                                    <div class="d-flex mt-2">
                                        <button class="btn btn-primario w-100" name="btnAccion" value="Ingreso" type="submit">Acceder</button>
                                    </div>
                                </form>
                                <!--Fin formulario de login-->
                            </div>
                        </div>
                    </div>
                    <div class="d mt-3">
                        <p class="bg-primary text-white text-center">Servicio Nacional de Aprendizaje SENA | SENNOVA</p>
                    </div>
                </div>
            </div>
            <!--Fin login-->
        </div>
    </div>
    <footer class="footer">
        <p>Todos los derechos reservados 2021 V 1.0</p>
    </footer>
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