<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=listado_registro_ai.xls");

session_start();
error_reporting(0);
require_once "../../model/conexion.php";
$conexion = new Conexion();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Identificación</th>
            <th>Nombre(s)</th>
            <th>Apellido(s)</th>
            <th>Programa</th>
            <th>Rol</th>
            <th>Fecha Registro</th>
        </tr>
        <?php
        $consulta = $conexion->prepare("SELECT * FROM persona");
        $consulta->execute();
        $dataPersona = $consulta->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dataPersona as $data) :
        ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['tipo_identificacion']; ?></td>
                <td><?php echo $data['numero_identificacion']; ?></td>
                <td><?php echo $data['nombre']; ?></td>
                <td><?php echo $data['apellido']; ?></td>
                <td><?php echo $data['programa']; ?></td>
                <td><?php echo $data['rol']; ?></td>
                <td><?php echo $data['fecha_registro']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>