<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="editor.php"><i class="fa fa-plus"></i> Crear Nueva Publicación</a>
        </div>
        <?php
            /*Consulta la publicaciones realizadas y las muestra*/ 
            $consultaPublicacion = $conexion->prepare("SELECT * FROM editor ORDER BY fecha DESC ");
            $consultaPublicacion->execute();
            if ($consultaPublicacion->rowCount() > 0) {
                $dataPublicacion = $consultaPublicacion->fetchAll(PDO::FETCH_ASSOC);
                foreach ($dataPublicacion as $publicacion) :
            /*Fin consulta*/
        ?>
                <div class="tile mt-3">
                    <h6 style="float: right;"><?php echo $publicacion['fecha']; ?></h6>
                    <br>
                    <?php echo $publicacion['contenido']; ?>
                </div>
                <?php endforeach;
        } else { ?>
                <div class="alert alert-dark" role="alert">
                    <h4>No hay publicaciones</h4>
                    <a class="text-danger" href="editor.php">Crear</a>
                </div>
        <?php } ?>
    </div>
</div>