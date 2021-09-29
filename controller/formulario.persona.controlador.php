<?php

$mensaje = "";

if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'RegistroAI':
            $tipo_persona = $_POST['tipo__persona'];
            $numero_persona = $_POST['numero__persona'];
            $nombre_persona = $_POST['nombre__persona'];
            $apellido_persona = $_POST['apellido__persona'];
            $telefono_persona = $_POST['telefono__persona'];
            $programa_persona = $_POST['programa__persona'];
            $rol_persona = $_POST['rol__persona'];
            
            $contrasena = 'Sena'.$numero_persona.'*';

            $consultaPersona = $conexion->prepare("SELECT * FROM persona WHERE numero_identificacion = '$numero_persona'");
            $consultaPersona->execute();

            if($consultaPersona->rowCount()>0){
                $mensaje = 'El usuario con numero de identificación '.$numero_persona.' ya se encuentra registrado';
            }else{

            $InsertarPersona = $conexion->prepare("INSERT INTO persona VALUES 
            (NULL,'$tipo_persona','$numero_persona','$nombre_persona','$apellido_persona',
            '$programa_persona','$rol_persona','$telefono_persona','Fuera de Linea','$contrasena',NOW())");
            $InsertarPersona->execute();

            if(!$InsertarPersona){
                $mensaje =  'Registro fallido';
            }else{
                $mensaje =  'Registro exitoso';
            }
        }

        break;
    }
}

?>