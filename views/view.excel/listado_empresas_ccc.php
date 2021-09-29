<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=listado-empresas-ccc.xls");

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
            <th>Matricula</th>
            <th>Organización</th>
            <th>Categoria</th>
            <th>Razón social</th>
            <th>Identificación</th>
            <th>Nit</th>
            <th>Fecha Matricula</th>
            <th>Fecha Renovación</th>
            <th>Dirección</th>
            <th>Municipio</th>
            <th>Telefono 1</th>
            <th>Telefono 2</th>
            <th>Telefono 3</th>
            <th>Correo electronico</th>
            <th>CIIU Actividad 1</th>
            <th>CIIU Actividad 2</th>
            <th>CIIU Actividad 3</th>
            <th>CIIU Actividad 4</th>
            <th>Personal</th>
            <th>Activo Total</th>
            <th>Tamaño</th>
            <th>Nombre Propietario</th>
            <th>Nombre Representante</th>
            <th>Autorización envio</th>
        </tr>
        <?php
        $consulta = $conexion->prepare("SELECT * FROM empresas_2020");
        $consulta->execute();
        $dataEmpresa = $consulta->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dataEmpresa as $data) :
        ?>
            <tr>
                <td><?php echo $data["Id"]; ?></td>
                <td><?php echo $data["matricula"]; ?></td>
                <td><?php echo $data["organizacion"]; ?></td>
                <td><?php echo $data["categoria"]; ?></td>
                <td><?php echo $data["razon_social"]; ?></td>
                <td><?php echo $data["identificacion"]; ?></td>
                <td><?php echo $data["nit"]; ?></td>
                <td><?php echo $data["fecha_matricula"]; ?></td>
                <td><?php echo $data["fecha_renovacion"]; ?></td>
                <td><?php echo $data["direccion"]; ?></td>
                <td><?php echo $data["municipio"]; ?></td>
                <td><?php echo $data["telefono1"]; ?></td>
                <td><?php echo $data["telefono2"]; ?></td>
                <td><?php echo $data["telefono3"]; ?></td>
                <td><?php echo $data["correo"]; ?></td>
                <td><?php echo $data["ciiu_actividad1"]; ?></td>
                <td><?php echo $data["ciiu_actividad2"]; ?></td>
                <td><?php echo $data["ciiu_actividad3"]; ?></td>
                <td><?php echo $data["ciiu_actividad4"]; ?></td>
                <td><?php echo $data["personal"]; ?></td>
                <td><?php echo $data["activo_total"]; ?></td>
                <td><?php echo $data["tamano"]; ?></td>
                <td><?php echo $data["nombre_propietario"]; ?></td>
                <td><?php echo $data["nombre_representante"]; ?></td>
                <td><?php echo $data["autorizacion_envio"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>