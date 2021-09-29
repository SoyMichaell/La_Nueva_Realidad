<?php
require 'views/session.php';
if(isset($_SESSION['usuario'])){
require_once "views/header.php";
$idIns = $_GET['id'];
$consultaPrograma = $conexion->prepare('SELECT * FROM persona WHERE id = :id');
$consultaPrograma->execute(array('id' => $idIns));
$resultadoPrograma = $consultaPrograma->fetch();
$programaIns = $resultadoPrograma['programa'];
?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile tile-border-top">
                <h2 class="title"><?php echo $resultadoPrograma['nombre'] . "" . $resultadoPrograma['apellido']; ?></h2>
                <p style="font-size: 28px;"><?php echo $resultadoPrograma['programa'];  ?></p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="tile">
                <p style="font-size: 28px;">Listado de aprendices a realizar seguimiento del proceso de encuestas</p>
                <hr>
                <table class="mt-2" id="ListadoTituladaAprendicesInstructor">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre completo</th>
                            <th>Telefono</th>
                            <?php
                            $consultaMuestra = $conexion->prepare("SELECT * FROM muestra");
                            $consultaMuestra->execute();
                            if ($consultaMuestra->rowCount() > 0) {
                            ?>
                                <th>Total Encuesta</th>
                                <th>Faltantes</th>
                                <th>Estado</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $consultaListadoAprendicesXInstructor = $conexion->prepare("SELECT * FROM persona WHERE (rol = :rol and programa = :programa)");
                        $consultaListadoAprendicesXInstructor->execute(array('rol' => 'Aprendiz', 'programa' => $programaIns));
                        $resultadoListadoAprendicesXInstructor = $consultaListadoAprendicesXInstructor->fetchAll();
                        foreach ($resultadoListadoAprendicesXInstructor as $resultado) :
                        ?>
                            <tr>
                                <td><?php echo $resultado['numero_identificacion']; ?></td>
                                <td><?php echo $resultado['nombre'] . " " . $resultado['apellido']; ?></td>
                                <td><?php echo $resultado['telefono']; ?></td>
                                <?php
                                //Consulta cuenta de encuestas por grupo
                                $consultaMuestra = $conexion->prepare("SELECT count(*) as cuenta FROM muestra WHERE (id_aprendiz = :aprendiz) GROUP BY id_aprendiz");
                                $consultaMuestra->execute(array('aprendiz'=>$resultado['id']));
                                $muestra = $consultaMuestra->fetch();
                                //Consulta estado cuenta
                                $consultaEstado = $conexion->prepare("SELECT count(*) as cuentaF FROM muestra WHERE (id_aprendiz = :aprendiz and estado_encuesta = :estado)");
                                $consultaEstado->execute(array('aprendiz'=>$resultado['id'],'estado'=>'Finalizada'));
                                $estado = $consultaEstado->fetch();
                                if ($consultaMuestra->rowCount() > 0) {
                                ?>
                                    <td><span class="badge badge-primary"><?php echo $muestra['cuenta']; ?></span></td>
                                    <td><span class="badge badge-warning"><?php echo $muestra['cuenta'] - $estado['cuentaF']; ?></span></td>
                                    <td><span class="badge badge-<?php echo ($estado['cuentaF'] != 0) ? 'primary' : 'danger' ?>"><?php echo ($estado['cuentaF'] != 0) ? 'En proceso' : 'Por iniciar' ?></span></td>
                                <?php } ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php require_once "views/footer.php"; ?>
<script src="assets/table.js"></script>
<?php }else{
    require_once '404.php';
} ?>