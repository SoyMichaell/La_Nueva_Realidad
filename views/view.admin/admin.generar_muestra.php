<?php
    /*Consulta tabla muestra, para tener un conteo de registros*/
    $sql_muestra = $conexion->prepare('SELECT * FROM respuestas INNER JOIN empresas_2020 ON respuestas.nit_empresa=empresas_2020.nit');
    $sql_muestra->execute();
    $data_muestra = $sql_muestra->fetch(PDO::FETCH_ASSOC);
    /*Fin consulta*/
    //Validacion, SI el conteo es > 0 se muestran los registros
    if ($sql_muestra->rowCount() > 0) {
?>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-size: 28px;">Empresas seleccionadas para el proceso de encuestas</p>
                        <hr>
                    </div>
                    <div class="p-3">
                        <a class="btn btn-light" href="https://docs.google.com/spreadsheets/d/1qwHbDJ_mY11vR93ZZhC3VT-7GZSpGnOR41M7VC_X-no/edit?usp=sharing" target="_blank">Aplicativo proceso encuestas</a>
                    </div>
                </div>
                <br>
                <!--Inicio listado empresas-->
                <table class="table" id="ListadoEmpresasSeleccionadas">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nit empresa</th>
                            <th>Razón social</th>
                            <!--<th>Actividad Economica</th>-->
                            <th>Dirección</th>
                            <th>Correo electronico</th>
                            <th>Telefono</th>
                            <th>Municipio</th>
                            <th>Estado encuesta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            /*Consulta tabla muestra - empresas_2020, esta consulta permite mostrar la información de las empresas seleccionadas*/
                            $consultaMuestra = $conexion->prepare("SELECT * FROM respuestas INNER JOIN empresas_2020 ON respuestas.nit_empresa=empresas_2020.nit");
                            $consultaMuestra->execute();
                            $dataMuestra = $consultaMuestra->fetchAll(PDO::FETCH_ASSOC);
                            /*Fin consulta*/
                            $id = 1;
                            foreach ($dataMuestra as $muestra) :

                        ?>
                            <tr>
                                <td><?php echo $id++; ?></td>
                                <td><?php echo $muestra['nit']; ?></td>
                                <td><?php echo $muestra['razon_social']; ?></td>
                                <!--<td><?php //echo $muestra['ciiu_actividad1'] ?></td>-->
                                <td><?php echo $muestra['direccion']; ?></td>
                                <td><?php echo $muestra['correo']; ?></td>
                                <td><?php echo $muestra['telefono1']; ?></td>
                                <td><?php echo $muestra['municipio']; ?></td>
                                <td><div class="badge badge-pill badge-primary">Finalizado</div></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!--Fin-->
            </div>
        </div>
    </div>
    <!--SI la validacion del conteo es < 0 nos muestra las opciones que tenemos
    Formulario de muestra para el respectivo calculo-->
<?php } else { ?>
    <div class="row">
        <div class="col-md-5">
            <div class="tile">
                <h3>Muestra</h3>
                <h5>Formula planteada:</h5>
                <h6>Muestra = ((Nivelconfianza * Nivelconfianza) * (PoblacionOcurrencia) * (ProbabilidadOcurrencia) * (Poblacion)) / ((Poblacion) * (GradoError * GradoError) + (Nivelconfianza * Nivelconfianza) * (Poblacion) * (ProbabilidadOcurrencia))</h6>
                <a href="assets/imagenes/formula.PNG" target="_blank"><img class="img-fluid" src="assets/imagenes/formula.PNG"></a>
                <hr>
                <form action="controller/empresa.controlador.php" method="post">
                    <?php
                        /*Consulta muestra, nos indica el tamaño de la muestra*/
                        $consultaMuestra = $conexion->prepare("SELECT * FROM tamano_muestra");
                        $consultaMuestra->execute();
                        //Valida si existe un registro, que indique el tamano de la muestra
                        if ($consultaMuestra->rowCount() > 0) {
                        $data_tamano = $consultaMuestra->fetch(PDO::FETCH_ASSOC);
                        /*Fin consulta*/
                    ?>
                        <!--Cajon tamano muestra-->
                        <div class="form-group">
                            <label for="">Tamaño de la muestra</label>
                            <input class="form-control" type="number" name="volumenMuestra" value="<?php echo $data_tamano['volumen']; ?>" readonly>
                        </div>
                        <!--Fin cajon-->
                        <button class="btn btn-danger" name="btnAccion" value="EliminarTamanoMuestra" type="submit">Eliminar Tamaño Muestra</button>
                    <?php
                        //Si no hay registro, se habilitad un formulario para el calculo de la muestra
                        } else { ?>
                        <!--Cajon poblacion-->
                        <div class="form-group">
                            <label for="">Población</label>
                            <input class="form-control" type="varchar" name="tpoblacion" required>
                        </div>
                        <!--Fin cajo-->
                        <!--Cajon nivel de confianza-->
                        <div class="form-group mt-1">
                            <label for="">Nivel de confianza</label>
                            <input class="form-control" type="varchar" name="nconfianza" required>
                        </div>
                        <!--Fin cajon-->
                        <!--Cajon grado de error-->
                        <div class="form-group">
                            <label for="">Grado de error</label>
                            <input class="form-control" type="varchar" name="gerror" required>
                        </div>
                        <!--Fin cajon-->
                        <!--Cajon poblacion de ocurrencia-->
                        <div class="form-group mt-1">
                            <label for="">Población de ocurrencia</label>
                            <input class="form-control" type="varchar" name="opoblacion" required>
                        </div>
                        <!--Fin cajon-->
                        <!--Cajon probabilidad de no ocurrencia-->
                        <div class="form-group mt-1">
                            <label for="">Probabilidad de no ocurrencia</label>
                            <input class="form-control" type="varchar" name="oprobabilidad" required>
                        </div>
                        <!--Fin cajon-->
                        <button class="btn btn-primary" name="btnAccion" value="VolumenMuestra" type="submit">Calcular Tamaño Muestra</button>
                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
        <!--Muestra los codigos que se generan de manera aleatoria, para el respectivo registro-->
        <div class="col-md-7">
            <div class="tile">
                <h2>Codigos generados aleatoriamente.</h2>
                <form action="controller/empresa.controlador.php" method="post">
                    <?php
                    require_once "views/views.muestra/variables.php";
                    require_once "views/views.muestra/aleatorio_municipio.php";
                    ?>
                    <button class="btn btn-primary mt-1" name="btnAccion" value="GenerarMuestra" type="submit">Generar muestra</button>
                </form>
            </div>
        </div>
        <!--Fin muestra codigos-->
    </div>
<?php
}
?>
