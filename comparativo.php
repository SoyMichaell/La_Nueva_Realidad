<?php 
    require_once 'views/session.php';
    if(isset($_SESSION['usuario'])){
    require_once 'views/header.php'; 
?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3>Cuandro comparativo de actividades economicas</h3>
                <br>
                <form action="cuadro.php?" method="get">
                    <div class="row">
                        <div class="col-md-6 mx-auto d-block">
                            <table class="table table-bordered table-hover text-center mx-auto" >
                                <?php 
                                    $consultaActividadActiva = $conexion->prepare("SELECT * FROM comparativo_muestra_actividad");
                                    $consultaActividadActiva->execute();
                                    $dataActividadActiva = $consultaActividadActiva->fetchAll();
                                    foreach($dataActividadActiva as $activo):
                                ?>
                                <tr><td><input type="checkbox" name="cuadro<?php echo $activo['id_actividad_c'] ?>" value="<?php echo $activo['id_actividad_c'] ?>"><?php echo $activo['id_actividad_c'] ?></td></tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                        <div class="col-md-6 mx-auto d-block">
                            <table class="table table-bordered table-hover text-center" >
                                <?php foreach($dataActividadActiva as $activo): ?>
                                <tr><td><input type="checkbox" name="cuadro<?php echo $activo['id_actividad_c'] ?><?php echo $activo['id_actividad_c'] ?>" value="<?php echo $activo['id_actividad_c'] ?><?php echo $activo['id_actividad_c'] ?>"><?php echo $activo['id_actividad_c'] ?></td></tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php 
    require_once 'views/footer.php';
    }else{
        require_once '404.php';
    }
?>