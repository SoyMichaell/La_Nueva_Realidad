<div class="row">
    <div class="col-md-12">
        <div class="tile">
        <?php
            /*Realiza la cuenta de las emresas de la muestra por aprendiz*/
            $cuenta_empresas = $conexion->prepare("SELECT COUNT(*) as cuenta FROM muestra WHERE id_aprendiz = $id");
            $cuenta_empresas->execute();
            $data_cuenta_empresas = $cuenta_empresas->fetch(PDO::FETCH_ASSOC);
            /*Fin consulta*/ 
            /*Consulta las empresas de la muestra y las asocia con la tabla empresas_2020 para tener la informacion completa de cada empresa*/
            $sql_muestra_selec = $conexion->prepare("SELECT * FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE id_aprendiz = $id ORDER BY municipio ASC ");
            $sql_muestra_selec->execute();
            $data_muestra_selec = $sql_muestra_selec->fetchAll(PDO::FETCH_ASSOC);
            /*Fin consulta*/
            /*Si la tabla muestra no contiene información, significa que el administrador aún no genera la muestra*/
            if ($sql_muestra_selec->rowCount() <= 0) { ?>
                <h3>El muestreo aún no esta listo.</h3>
            <?php
            /*Fin*/
            /*Muestra las empresas seleccionadas*/
            } else {
            ?>
                <h3 id="titulo">Estas son las empresas seleccionadas para el muestreo.</h3>
                <table id="ListadoEmpresasSeleccionadasAI">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nit empresa</th>
                            <th>Razón social</th>
                            <th>Dirección</th>
                            <th>Telefono</th>
                            <th>Municipio</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Mostrar la información mediante un foreach
                        foreach ($data_muestra_selec as $muestra_s) :
                        ?>
                            <tr>
                                <td><?php echo $muestra_s['id_muestra']; $idm = $muestra_s['id_muestra'];  ?></td>
                                <td><?php echo $muestra_s['nit']; ?></td>
                                <td><?php echo $muestra_s['razon_social']; ?></td>
                                <td><?php echo $muestra_s['direccion']; ?></td>
                                <td>
                                    <?php
                                        if($muestra_s['telefono1'] != ""){
                                            echo $muestra_s['telefono1'];
                                        }else if($muestra_s['telefono2'] != ""){
                                            echo $muestra_s['telefono2'];
                                        }else if($muestra_s['telefono3'] != ""){
                                            echo $muestra_s['telefono3'];
                                        }
                                    ?>
                                </td>
                                <td><?php echo $muestra_s['municipio']; ?></td>
                                <td>
                                    <?php
                                    /*Consulta el estado en que se encuentra la empresa, este estado hace referencia al estado en el que se encuentra el proceso
                                    de encuesta (Finalizado,Sin responder)*/
                                    $consultaEstado = $conexion->prepare("SELECT * FROM muestra WHERE (id_muestra = $idm AND estado_encuesta = 'Sin responder')");
                                    $consultaEstado->execute();
                                    /*Fin*/
                                    if ($consultaEstado->rowCount() > 0) { ?>
                                        <div class="badge badge-pill badge-danger">Sin responder</div>
                                    <?php } else { ?>
                                        <div class="badge badge-pill badge-primary">Finalizado</div>
                                    <?php } ?>
                                </td>
                                <td style="width: 12%;">
                                    <form action="controller/empresa.controlador.php" method="post">
                                        <input name="id_muestra" value="<?php echo $muestra_s['id_muestra'];  ?>" type="hidden">
                                        <a class="btn btn-primary" href="registrar_empresa_ccc.php?id=<?php echo $muestra_s['id_empresa']; ?>">Editar</a>
                                        <?php
                                        if ($consultaEstado->rowCount() > 0) { ?>
                                            <button class="btn btn-info" name="btnAccion" value="CambiarEstado" type="submit">Terminar</button>
                                        <?php }
                                        ?>

                                    </form>
                                </td>
                            </tr>
                        <?php endforeach;  ?>
                    </tbody>
                </table>
            <?php } ?>
        </div>
    </div>
</div>