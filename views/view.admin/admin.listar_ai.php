<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h4 id="titulo">Listado de aprendices e instructores vinculados en el proceso de encuestas.</h4>
            <div class="tile-title-w-btn">
                <h3 class="title" id="titulo">Acciones</h3>
                <div class="btn-group">
                    <a class="btn btn-primary" href="registrar_ai.php">Nuevo</a>
                    <a class="btn btn-info" href="views/view.excel/listado_registro.php" title="Descarga registros"><i class="fa fa-file-excel"></i></a>
                </div>
            </div>
            <!--Listado aprendices-->
            <table class="table mt-2" id="ListadoAI">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Identificación</th>
                        <th>Nombre(s)</th>
                        <th>Apellido(s)</th>
                        <th>Programa</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Fecha Registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    /*Consulta muestra listado del personal vinculado a la plataforma*/
                    $sql_persona = $conexion->prepare("SELECT * FROM persona INNER JOIN estadopersona ON persona.estado=estadopersona.idE");
                    $sql_persona->execute();
                    $data_persona = $sql_persona->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($data_persona as $persona) :
                    /*Fin consulta*/
                    ?>
                        <tr>
                            <td><?php echo $persona['id']; ?></td>
                            <td><?php echo $persona['tipo_identificacion']; ?></td>
                            <td><?php echo $persona['numero_identificacion']; ?></td>
                            <td><?php echo $persona['nombre']; ?></td>
                            <td><?php echo $persona['apellido']; ?></td>
                            <td><?php echo $persona['programa']; ?></td>
                            <td><?php echo $persona['rol']; ?></td>
                            <td>
                                <?php if($persona['nombreE'] == 'Activo'){?>
                                    <span class="badge bg-success text-white"><?php echo $persona['nombreE']; ?></span>
                                <?php }else{ ?>
                                 <span class="badge bg-danger text-white"><?php echo $persona['nombreE']; ?></span>      
                                 <?php } ?>                         
                            </td>
                            <td><?php echo $persona['fecha_registro']; ?></td>
                            <td><a class='btn btn-primary' href='registrar_ai.php?id=<?php echo $persona['id'] ?>'>Editar</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!--Fin listado-->
        </div>
    </div>
</div>