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
                    $dataPersona = $BuscarUsuario->fetch(PDO::FETCH_ASSOC);
                    if($dataPersona['estado'] == 1 && $dataPersona['rol'] == 'Administrador'){
                    $_SESSION['usuario'] = $dataPersona['id'];
                    header('location: dashboard.php');
                    }else{
                        $mensaje = "Su rol o estado no permite el ingreso a la plataforma";
                    }
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