<?php

session_start();
$mensaje = "";

if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Ingreso':
            $usuario = $_POST['tipo__persona'];
            if($usuario == 'tipo'){
                $mensaje = "Tipo de usuario incorrecto";
            }else{
                $password = $_POST['password'];
                $BuscarUsuario = $conexion->prepare("SELECT * FROM persona WHERE (tipo_identificacion = '$usuario' && contrasena = '$password')");
                $BuscarUsuario->execute();
                if($BuscarUsuario->rowCount()>0){
                    //$ActualizarEstado = $conexion->prepare("UPDATE persona SET estado = 'En Linea' WHERE (tipo_identificacion = '$usuario' && numero_identificacion = '$password')");
                    //$ActualizarEstado->execute();
                    $dataPersona = $BuscarUsuario->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['usuario'] = $dataPersona['id'];
                    header('location: dashboard.php');
                }else{
                    $mensaje = "Usuario o Contraseña incorrectos";
                } 
            }
        break;
        case 'salir':
            unset($_SESSION['usuario']);
            session_destroy();
            header('location:.././');
        break;
    }
}

?>