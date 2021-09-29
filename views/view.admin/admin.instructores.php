<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3>Instructores Vinculados</h3>
            <p id="content-module">En este modulo se encuetra un listado de los instructores vinculados al proceso de encuestas, con sus respectivos aprendices asiganados a los cuales les debe llevar un seguimiento, con el fin de hacer cumplir con las encuestas asignadas a sus aprendices.</p>
        </div>
    </div>
    <?php
    //Consulta muestra solo a los instructores ordenados por su nombre de manera descendente
    $consultaInstructor = $conexion->prepare("SELECT * FROM persona WHERE rol = :rol ORDER BY nombre ASC");
    $consultaInstructor->execute(array('rol' => 'Instructor'));
    $dataInstructor = $consultaInstructor->fetchAll();
    //Fin consulta
    foreach ($dataInstructor as $instructor) :
    ?>
        <div class="col-md-3">
            <div class="tile tile-border-top">
                <h3 class="tile-title"><?php echo $instructor['nombre'] . " " . $instructor['apellido'] ?></h3>
                <div class="tile-body">
                    <h6><?php echo $instructor['rol']; ?> <br> <?php echo $instructor['tipo_identificacion'].' : '.$instructor['numero_identificacion']; ?> <br> <?php echo $instructor['programa']; ?> <br> <?php echo $instructor['fecha_registro']; ?></h6>
                </div>
                <div class="tile-footer">
                    <table class="table table-bordered">
                        <?php
                        //Consulta los aprendices vinculados a cada instructor
                        $consultaTotalAprendices = $conexion->prepare("SELECT COUNT(*) as cuentap FROM persona WHERE (rol = :rol and programa = :programa)");
                        $consultaTotalAprendices->execute(array('rol' => 'Aprendiz', 'programa' => $instructor['programa']));
                        $resultadoconsultaTotalAprendices = $consultaTotalAprendices->fetchAll();
                        //Fin consulta
                        foreach ($resultadoconsultaTotalAprendices as $total) :
                        ?>
                            <tr>
                                <th>
                                    <h5>Total aprendices</h5>
                                </th>
                                <td>
                                    <h5><?php echo $total['cuentap']; ?></h5>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre Completo</th>
                                <th>Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //Consulta muestra a los aprendices vinculados con el programa de cada instructor
                            $consultaListadoAprendicesXInstructor = $conexion->prepare("SELECT * FROM persona WHERE (rol = :rol and programa = :programa) ORDER BY nombre ASC");
                            $consultaListadoAprendicesXInstructor->execute(array('rol' => 'Aprendiz', 'programa' => $instructor['programa']));
                            $resultadoListadoAprendicesXInstructor = $consultaListadoAprendicesXInstructor->fetchAll();
                            //Fin consulta
                            if ($consultaListadoAprendicesXInstructor->rowCount() > 0) {
                                foreach ($resultadoListadoAprendicesXInstructor as $resultado) :
                            ?>
                                    <tr>
                                        <td><?php echo $resultado['nombre'] . ' ' . $resultado['apellido']; ?></td>
                                        <td><a href="tel:+57 <?php echo $resultado['telefono']; ?>"><?php echo $resultado['telefono']; ?></a></td>
                                    </tr>
                                    <tr>
                                    <?php endforeach;
                            } else { ?>
                                    <td style="width:100%">
                                        <h4>No hay aprendices vinculados</h4>
                                    </td>
                                <?php } ?>
                                    </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="listaAprendices.php?id=<?php echo $instructor['id']; ?>">Aprendices Vinculados</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>