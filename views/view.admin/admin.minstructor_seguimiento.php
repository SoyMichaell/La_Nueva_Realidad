<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3>Seguimiento aprendices:</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae optio aliquid vel molestias earum nemo, ab ad odit dolores, fugit animi repellat. Delectus hic illo beatae reprehenderit, unde similique tempora.</p>
            <br>
            <!--Listado titulada aprendices por instructor-->
            <table class="mt-4" id="ListadoTituladaAprendicesInstructor">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre completo</th>
                        <th>Telefono</th>
                        <?php
                            //Consulta el total de la muestra, para luego validar
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
                        /*Consulta de la tabla persona por rol y programa y los vincula con el instructor de su mismo programa*/
                        $consultaListadoAprendicesXInstructor = $conexion->prepare("SELECT * FROM persona WHERE (rol = :rol and programa = :programa)");
                        $consultaListadoAprendicesXInstructor->execute(array('rol' => 'Aprendiz', 'programa' => $programa_persona));
                        $resultadoListadoAprendicesXInstructor = $consultaListadoAprendicesXInstructor->fetchAll();
                        foreach ($resultadoListadoAprendicesXInstructor as $resultado) :
                        /*Fin consulta*/
                    ?>
                        <tr>
                            <td><?php echo $resultado['numero_identificacion']; ?></td>
                            <td><?php echo $resultado['nombre'] . " " . $resultado['apellido']; ?></td>
                            <td><?php echo $resultado['telefono']; ?></td>
                            <?php
                            //Consulta cuenta de encuestas por grupo
                            $consultaMuestra = $conexion->prepare("SELECT count(*) as cuenta FROM muestra GROUP BY id_aprendiz");
                            $consultaMuestra->execute();
                            //Consulta estado cuenta
                            $consultaEstado = $conexion->prepare("SELECT count(*) as cuentaF FROM muestra WHERE (id_aprendiz = :aprendiz and estado_encuesta = :estado)");
                            $consultaEstado->execute(array('aprendiz' => $resultado['id'], 'estado' => 'Finalizada'));
                            $estado = $consultaEstado->fetch();
                            $muestra = $consultaMuestra->fetch();
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