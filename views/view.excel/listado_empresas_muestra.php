<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=listado-empresas-muestra.xls");

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
            <th>Nit empresa</th>
            <th>Razon social</th>
            <th>Direccion</th>
            <th>Actividad Economica</th>
            <th>Correo electronico</th>
            <th>Telefono</th>
            <th>Municipio</th>
        </tr>
        <?php
        $consulta = $conexion->prepare("SELECT * FROM respuestas INNER JOIN empresas_2020 ON respuestas.nit_empresa = empresas_2020.nit");
        $consulta->execute();
        $dataEmpresa = $consulta->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dataEmpresa as $data) :
        ?>
            <tr>
                <td><?php echo $data["Id"]; ?></td>
                <td><?php echo $data["nit"]; ?></td>
                <td><?php echo $data["razon_social"]; ?></td>
                <td><?php echo $data["direccion"]; ?></td>
                <td><?php echo $data["ciiu_actividad1"] ?></td>
                <td><?php echo $data["correo"]; ?></td>
                <td><?php echo $data["telefono1"]; ?></td>
                <td><?php echo $data["municipio"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>