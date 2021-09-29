<?php
require_once "../model/conexion.php";
$conexion = new Conexion();
$contenido = $_REQUEST['contenido'];
$guardarContenido = $conexion->prepare("INSERT INTO editor VALUES (NULL,:contenido,NOW())");
$guardarContenido->execute(["contenido" => $contenido]);
?>