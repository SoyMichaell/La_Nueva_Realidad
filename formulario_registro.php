<?php
//Rquiero el archivo conexion.php 
//Hago una instancia de la clase Conexio
//Requiero el archivo administrador.controlador.php que es donde contiene las validaciones
require_once "model/conexion.php";
$conexion = new Conexion();
require_once "controller/formulario.persona.controlador.php";
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
<body style="background-image: url('assets/imagenes/cursos-sena-bogota.jpg');
  background-size: cover;">
<div class="container">
    <?php require_once 'views/view.admin/admin.formulario.php'; ?>
</div>
<script src="assets/redirect.js"></script>
<?php require_once 'views/footer.php';?>