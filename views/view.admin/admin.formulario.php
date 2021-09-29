<div class="row">
    <!--Inicio formulario de registro de personal vinculado a la plataforma-->
    <div class="col-md-12" style="margin-top: 2%;border-top-color: 2px solid #009688;">
        <div class="tile mx-auto" id="formulario__registro_sin_rol">
            <h4 id="titulo__f">Registro personal vinculado al proyecto La Nueva Realidad. (Aprendices e Instructores)</h4>
            <p style="font-size: 18px;">La información recolectada por este medio, será de uso netamente institucional. <br> <b>Importante:</b> El usuario es su tipo de documento y la contraseña el numero </p>
            <form method="post">
                <div class="row">
                    <?php
                    //Validacion del valor que se pasa por url
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        /*Consulta persona y lo compara con el id de la uri*/
                        $sql_persona = $conexion->prepare("SELECT * FROM persona WHERE id = $id");
                        $sql_persona->execute();
                        if ($sql_persona->rowCount() > 0) {
                            $data_persona = $sql_persona->fetch(PDO::FETCH_ASSOC);
                        /*Fin consulta*/
                    ?>
                        <!--Cajon id persona oculta-->
                        <div class="col-md-12">
                            <label for="">Identificador</label>
                            <input class="form-control" type="number" name="id__persona" id="id__persona" value="<?php echo isset($_GET['id']) != '' ? $data_persona['id'] : 'hidden' ?>" readonly>
                        </div>
                        <!--Fin-->
                    <?php
                        }
                    } else {
                    }
                    ?>

                </div>
                <!--Campo de notificacion dependiendo la acción realizada-->
                <div class="bs-component <?php echo ($mensaje == '') ? 'd-none' : 'd-block' ?>">
                    <div class="alert alert-dismissible alert-info">
                        <button class="close" type="button" data-dismiss="alert">x</button>
                        <a class="alert-link" href="#"><?php echo $mensaje; ?></a>
                    </div>
                </div>
                <!--Fin-->
                <div class="row mt-2">
                    <!--Cajon tipo de identificacion-->
                    <div class="col-md-12">
                        <label for="">Tipo de identificación</label>
                        <select class="form-control" name="tipo__persona" id="tipo__persona">
                            <option value="<?php echo isset($_GET['id']) != '' ? $data_persona['tipo_identificacion'] : 'Seleccione' ?>"><?php echo isset($_GET['id']) != '' ? $data_persona['tipo_identificacion'] : 'Seleccione' ?></option>
                            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                            <option value="Cedula de extranjeria">Cedula de extranjeria</option>
                        </select>
                    </div>
                    <!--Fin-->
                    <!--Cajon numero de identificacion-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Numero de identificación</label>
                            <input class="form-control" type="number" name="numero__persona" id="numero__persona" value="<?php echo isset($_GET['id']) != '' ? $data_persona['numero_identificacion'] : '' ?>" required>
                        </div>
                    </div>
                    <!--Fin-->
                </div>
                <div class="row">
                    <!--Cajon nombre-->
                    <div class="col-md-12">
                        <label for="">Nombre(s)</label>
                        <input class="form-control" type="text" name="nombre__persona" id="nombre__persona" value="<?php echo isset($_GET['id']) != '' ? $data_persona['nombre'] : '' ?>" required>
                    </div>
                    <!--Fin-->
                    <!--Cajon grupal APELLIDO,TELEFONO-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Apellido(s)</label>
                            <input class="form-control" type="text" name="apellido__persona" id="apellido__persona" value="<?php echo isset($_GET['id']) != '' ? $data_persona['apellido'] : '' ?>" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input class="form-control" type="number" name="telefono__persona" id="telefono__persona" value="<?php echo isset($_GET['id']) != '' ? $data_persona['telefono'] : '' ?>" required>
                        </div>
                    </div>
                    <!--Fin-->
                </div>
                <!--Cajon grupal PROGRAMA,ROL-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Programa</label>
                            <select class="form-control" name="programa__persona" id="programa__persona">
                                <!--Se utiliza un if ternario para conocer el programa de la persona-->
                                <option value="<?php echo isset($_GET['id']) != '' ? $data_persona['programa'] : 'programa' ?>"><?php echo isset($_GET['id']) != '' ? $data_persona['programa'] : 'Seleccione programa' ?></option>
                                <option value="Tecnico Contabilizacion de Operaciones Comerciales y Financieras">Tecnico Contabilizacion de Operaciones Comerciales y Financieras</option>
                                <option value="Tecnología en gestión administrativa">Tecnología en gestión administratíva</option>
                                <option value="Tecnología en gestión de proyectos de desarrollo económico y social">Tecnología en gestión de proyectos de desarrollo económico y social</option>
                                <option value="Tecnología en gestión empresarial">Tecnología en gestión empresarial</option>
                                <option value="Tecnologo en formulación de proyecto">Tecnologo en formulación de proyecto</option>
                                <option value="Tecnología en gestión del talento humano">Tecnología en gestión del talento humano</option>
                                <option value="Tecnología en sistemas de gestión ambiental">Tecnología en sistemas de gestión ambiental</option>
                                <option value="Tecnologia en gestion administrativa / Intercambio internacional de semilleros de investigacion sennova">Tecnologia en gestion administrativa / Intercambio internacional de semilleros de investigacion sennova</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Rol</label>
                            <select class="form-control" name="rol__persona" id="rol__persona">
                                <!--Se utiliza un if ternario para conocer el rol de la persona-->
                                <option value="<?php echo isset($_GET['id']) != '' ? $data_persona['rol'] : 'rol' ?>"><?php echo isset($_GET['id']) != '' ? $data_persona['rol'] : 'Seleccione rol' ?></option>
                                <option value="Aprendiz">Aprendiz</option>
                                <option value="Instructor">Instructor</option>
                                <option value="Sennova">Sennova</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--Fin-->
                <!--Boton envia información-->
                <div class="tile-footer">
                    <button class="btn btn-primary" name="btnAccion" value="RegistroAI" type="submit">Guardar</button>
                </div>
                <!--Fin-->
            </form>
        </div>
    </div>
    <!--Fin-->
</div>