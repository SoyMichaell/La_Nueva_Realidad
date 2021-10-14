<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h4 id="titulo">Registro de vinculados al proyecto LA NUEVA REALIDAD.</h4>
            <form action="controller/persona.controlador.php" method="post">
                <div class="row">
                    <?php
                    //Valida el id pasado por la uri
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        /**Consulta persona y lo compara con el id*/
                        $sql_persona = $conexion->prepare("SELECT * FROM persona WHERE id = $id");
                        $sql_persona->execute();
                        if ($sql_persona->rowCount() > 0) {
                            $data_persona = $sql_persona->fetch(PDO::FETCH_ASSOC);
                        /*Fin consulta*/
                    ?>
                        <!--Cajon identificador-->
                        <div class="col-md-12">
                            <label for="">Identificador</label>
                            <input class="form-control" type="number" name="id__persona" id="id__persona" value="<?php echo isset($_GET['id']) != '' ? $data_persona['id'] : 'hidden' ?>" readonly>
                        </div>
                        <!--Fin cajon-->
                    <?php }} ?>
                </div>
                <div class="row mt-2">
                    <!--Cajon tipo persona-->
                    <div class="col-md-6">
                        <label for="">Tipo de identificación</label>
                        <select class="form-control" name="tipo__persona" id="tipo__persona">
                            <option value="<?php echo isset($_GET['id']) != '' ? $data_persona['tipo_identificacion'] : 'Seleccione' ?>"><?php echo isset($_GET['id']) != '' ? $data_persona['tipo_identificacion'] : 'Seleccione' ?></option>
                            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                            <option value="Cedula de extranjeria">Cedula de extranjeria</option>
                        </select>
                    </div>
                    <!--Fin cajon-->
                    <!--Cajon numero de identificacion-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Numero de identificación</label>
                            <input class="form-control" type="number" name="numero__persona" id="numero__persona" placeholder="Introduzca numero de documento" value="<?php echo isset($_GET['id']) != '' ? $data_persona['numero_identificacion'] : '' ?>" required>
                        </div>
                    </div>
                    <!--Fin cajon-->
                </div>
                <!--Cajon grupal NOMBRE,APELLIDO-->
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Nombre(s)</label>
                        <input class="form-control" type="text" name="nombre__persona" id="nombre__persona" placeholder="Introduzca nombre..." value="<?php echo isset($_GET['id']) != '' ? $data_persona['nombre'] : '' ?>" required>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Apellido(s)</label>
                            <input class="form-control" type="text" name="apellido__persona" id="apellido__persona" placeholder="Introduzca apellido..." value="<?php echo isset($_GET['id']) != '' ? $data_persona['apellido'] : '' ?>" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input class="form-control" type="text" name="telefono__persona" id="telefono__persona" placeholder="Introduzca telefono..." value="<?php echo isset($_GET['id']) != '' ? $data_persona['telefono'] : '' ?>" required>
                        </div>
                    </div>
                </div>
                <!--Fin cajon-->
                <!--Cajon grupal TELEFONO,PROGRAMA,ROL-->
                <div class="row"> 
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Programa</label>
                            <select class="form-control" name="programa__persona" id="programa__persona">
                                <option value="<?php echo isset($_GET['id']) != '' ? $data_persona['programa'] : 'programa' ?>"><?php echo isset($_GET['id']) != '' ? $data_persona['programa'] : 'Seleccione programa' ?></option>
                                <option value="Tecnico Contabilizacion de Operaciones Comerciales y Financieras">Técnico Contabilizacion de Operaciones Comerciales y Financieras</option>
                                <option value="Tecnico en Sistemas">Técnico en Sistemas</option>
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Rol</label>
                            <select class="form-control" name="rol__persona" id="rol__persona">
                                <option value="<?php echo isset($_GET['id']) != '' ? $data_persona['rol'] : 'rol' ?>"><?php echo isset($_GET['id']) != '' ? $data_persona['rol'] : 'Seleccione rol' ?></option>
                                <option value="Aprendiz">Aprendiz</option>
                                <option value="Instructor">Instructor</option>
                                <option value="Sennova">Sennova</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Estado</label>
                            <select class="form-control" name="estado__persona" id="estado__persona">
                                <option value="<?php echo isset($_GET['id']) != '' ? $data_persona['estado'] : 'estado' ?>"><?php echo isset($_GET['id']) != '' ? $data_persona['estado'] : 'Seleccione estado' ?></option>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Contraseña: (Sena(numero documento de registro)*)</label>
                            <input class="form-control w-75" style="float: left;" type="password" name="contra__persona" id="contra__persona" value="<?php echo isset($_GET['id']) != '' ? $data_persona['contrasena'] : '' ?>" required>
                            <button class="btn mx-auto" id="btn__mostrar" onclick="mostrarPass()" type="button"><i class="fa fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <!--Fin cajon-->
                <div class="tile-footer">
                    <button class="btn btn-primary" name="btnAccion" value="<?php echo isset($_GET['id']) != '' ? 'EditarAI' : 'RegistroAI' ?>" type="submit"><?php echo isset($_GET['id']) != '' ? 'Editar' : 'Guardar' ?></button>
                    <a class="btn btn-info" href="listar_ai.php">Ver lista</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function mostrarPass() {
        var tipo = document.getElementById("contra__persona");
        if (tipo.type == 'password') {
            tipo.type = 'text';
        } else {
            tipo.type = 'password';
        }
    }
</script>