<?php

require_once "../model/conexion.php";
$conexion = new Conexion();

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
            $contra__persona = $_POST['contra__persona'];

            $contrasena = 'Sena'.$contra__persona.'*';

            $InsertarPersona = $conexion->prepare("INSERT INTO persona VALUES 
            (NULL,'$tipo_persona','$numero_persona','$nombre_persona','$apellido_persona',
            '$programa_persona','$rol_persona','$telefono_persona','Fuera de Linea','$contrasena',NOW())");
            $InsertarPersona->execute();

            if(!$InsertarPersona){
                echo "Registro fallido";
            }else{
                header('location:../registrar_ai.php');
            }
            die();
        break;
        case 'EditarAI':
            $id = $_POST['id__persona'];
            $tipo_persona = $_POST['tipo__persona'];
            $numero_persona = $_POST['numero__persona'];
            $nombre_persona = $_POST['nombre__persona'];
            $apellido_persona = $_POST['apellido__persona'];
            $telefono_persona = $_POST['telefono__persona'];
            $programa_persona = $_POST['programa__persona'];
            $rol_persona = $_POST['rol__persona'];

            $contrasena = 'Sena'.$numero_persona.'*';

            $ActulizarPersona = $conexion->prepare("UPDATE persona 
            SET tipo_identificacion='$tipo_persona',
            numero_identificacion='$numero_persona',
            nombre='$nombre_persona',
            apellido='$apellido_persona',
            programa='$programa_persona',
            rol='$rol_persona',
            telefono='$telefono_persona',
            contrasena = '$contrasena' WHERE id = $id ");
            $ActulizarPersona->execute();

            if(!$ActulizarPersona){
                echo "Actualizacion fallida";
            }else{
                header('location:../listar_ai.php');
            }
            die();
        break;
    }
}

?>