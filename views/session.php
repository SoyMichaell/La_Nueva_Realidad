<?php
    //Requiere el archivo config el cual guarda el valor de url
    require_once 'config/config.php';
    //Require el modelo conexion.php (El cual contiene la información necesaria para establecer la conexion con la BD)
    require_once 'model/conexion.php';
    //Instanciamos la clase Conexion
    $conexion = new Conexion();
    //Inicia la sesion
    session_start();
    //Omite el reporte de errores
    error_reporting(0);
    //Valor de la sesion
    $id = $_SESSION['usuario'];

    if(isset($id)){
        /*Consulta los datos de la persona que esta iniciando la sesion*/
        $sql_persona = $conexion->prepare("SELECT * FROM persona WHERE id = $id ");
        $sql_persona->execute();
        $data = $sql_persona->fetch(PDO::FETCH_ASSOC);
        $programa_persona = $data['programa'];
        $rol_persona = $data['rol'];
        /*Fin consulta*/ 
    }

    
?>