<?php 
require 'views/session.php';
if(isset($_SESSION['usuario'])){
require_once 'views/header.php'; 
error_reporting(0);
$idEmpresaCCC = $_GET['id'];
$buscarEmpresaCCC = $conexion->prepare("SELECT * FROM empresas_2020 WHERE Id = $idEmpresaCCC");
$buscarEmpresaCCC->execute();
$dataEmpresaCCC = $buscarEmpresaCCC->fetch(PDO::FETCH_ASSOC);
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Escritorio | Empresas CCC</h1>
            <p>Bienvenido a la plataforma</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="registrar_empresa_ccc.php?id=<?php echo $idEmpresaCCC ?>">Empresas</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="tile">
                <div class="tile-title-w-btn">
                    <h3 class="title"><?php echo $dataEmpresaCCC['razon_social']; ?></h3>
                </div>
                <form action="controller/empresa.controlador.php" method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Identificador</label>
                            <input class="form-control" type="number" name="Id" id="Id" value="<?php echo $dataEmpresaCCC['Id']; ?>" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="">Matricula</label>
                            <input class="form-control" type="number" name="matricula" id="matricula" value="<?php echo $dataEmpresaCCC['matricula']; ?>" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="">Organización</label>
                            <input class="form-control" type="number" name="organizacion" id="organizacion" value="<?php echo $dataEmpresaCCC['organizacion']; ?>" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="">Categoria</label>
                            <input class="form-control" type="number" name="categoria" id="categoria" value="<?php echo $dataEmpresaCCC['categoria']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="">Identificacion</label>
                            <input class="form-control" type="number" name="identificacion" id="identificacion" value="<?php echo $dataEmpresaCCC['identificacion']; ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="">Nit</label>
                            <input class="form-control" type="number" name="nit" id="nit" value="<?php echo $dataEmpresaCCC['nit']; ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="">Fecha Matricula</label>
                            <input class="form-control" type="text" name="fechamatricula" id="fechamatricula" value="<?php echo $dataEmpresaCCC['fecha_matricula']; ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="">Fecha Renovación</label>
                            <input class="form-control" type="text" name="fecharenovacion" id="fecharenovacion" value="<?php echo $dataEmpresaCCC['fecha_renovacion']; ?>">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="">Dirección</label>
                            <input class="form-control" type="text" name="direccion" id="direccion" value="<?php echo $dataEmpresaCCC['direccion']; ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="">Municipio</label>
                            <input class="form-control" type="text" name="municipio" id="municipio" value="<?php echo $dataEmpresaCCC['municipio']; ?>">
                        </div>
                        <div class="col-md-2">
                            <label for="">Telefono 1</label>
                            <input class="form-control" type="number" name="telefono1" id="telefono1" value="<?php echo $dataEmpresaCCC['telefono1']; ?>">
                        </div>
                        <div class="col-md-2">
                            <label for="">Telefono 2</label>
                            <input class="form-control" type="number" name="telefono2" id="telefono2" value="<?php echo $dataEmpresaCCC['telefono2']; ?>">
                        </div>
                        <div class="col-md-2">
                            <label for="">Telefono 3</label>
                            <input class="form-control" type="number" name="telefono3" id="telefono3" value="<?php echo $dataEmpresaCCC['telefono3']; ?>">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label for="">Correo electronico</label>
                            <input class="form-control" type="email" name="correo" id="correo" value="<?php echo $dataEmpresaCCC['correo']; ?>">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="">Ciiu Actividad 1</label>
                            <textarea class="form-control" name="ciiu_actividad1" id="ciiu_actividad1" cols="30" rows="5"><?php echo $dataEmpresaCCC['ciiu_actividad1']; ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">Ciiu Actividad 2</label>
                            <textarea class="form-control" name="ciiu_actividad2" id="ciiu_actividad2" cols="30" rows="5"><?php echo $dataEmpresaCCC['ciiu_actividad2']; ?></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="">Ciiu Actividad 3</label>
                            <textarea class="form-control" name="ciiu_actividad3" id="ciiu_actividad3" cols="30" rows="5"><?php echo $dataEmpresaCCC['ciiu_actividad3']; ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">Ciiu Actividad 4</label>
                            <textarea class="form-control" name="ciiu_actividad4" id="ciiu_actividad4" cols="30" rows="5"><?php echo $dataEmpresaCCC['ciiu_actividad4']; ?></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1">
                            <label for="">Personal</label>
                            <input class="form-control" type="number" name="personal" id="personal" value="<?php echo $dataEmpresaCCC['personal']; ?>">
                        </div>
                        <div class="col-md-2">
                            <label for="">Nivel activo</label>
                            <input class="form-control" type="number" name="activo_total" id="activo_total" value="<?php echo $dataEmpresaCCC['activo_total']; ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="">Tamaño</label>
                            <input class="form-control" type="text" name="tamano" id="tamano" value="<?php echo $dataEmpresaCCC['tamano']; ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="">Nombre propietario</label>
                            <input class="form-control" type="text" name="nombre_propietario" id="nombre_propietario" value="<?php echo $dataEmpresaCCC['nombre_propietario']; ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="">Nombre representante</label>
                            <input class="form-control" type="text" name="nombre_representante" id="nombre_representante" value="<?php echo $dataEmpresaCCC['nombre_representante']; ?>">
                        </div>
                        <div class="d-flex mt-1 p-3">
                            <button class="btn btn-primary" name="btnAccion" value="ActualizarEmpresaCCC" type="submit">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="tile">
                <div class="tile-title-w-btn">
                    <h3 class="title">Listado tipo empresas</h3>
                </div>
                <div class="tabla">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ORG.</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_tipo_ccc = $conexion->prepare("SELECT * FROM tipo_empresa_cc");
                            $sql_tipo_ccc->execute();
                            $data_tipo_ccc = $sql_tipo_ccc->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($data_tipo_ccc as $tipo_cc) :
                            ?>
                                <tr>
                                    <td><?php echo $tipo_cc['id_tipo_cc']; ?></td>
                                    <td><?php echo $tipo_cc['nombre_tipo_ccc']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tile">
                <div class="tile-title-w-btn">
                    <h3 class="title">Listado categoria</h3>
                </div>
                <div class="tabla">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>CATEGORIA</th>
                                <th>TIPO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql_categoria_ccc = $conexion->prepare("SELECT * FROM categoria");
                                $sql_categoria_ccc->execute();
                                $data_tipo_categoria = $sql_categoria_ccc->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data_tipo_categoria as $categoria) :
                            ?>
                            <tr>
                                <td><?php echo $categoria['id_categoria']; ?></td>
                                <td><?php echo $categoria['nombre_categoria']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tile">
                <div class="tile-title-w-btn">
                    <h3 class="title">Listado actividad economica</h3>
                </div>
                <div class="tabla">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>CIIU GENERAL.</th>
                                <th>ACTIVIDAD ECONOMICA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_tipo_ccc = $conexion->prepare("SELECT * FROM actividad_economica");
                            $sql_tipo_ccc->execute();
                            $data_tipo_ccc = $sql_tipo_ccc->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($data_tipo_ccc as $tipo_cc) :
                            ?>
                                <tr>
                                    <td><?php echo $tipo_cc['id_actividad']; ?></td>
                                    <td><?php echo $tipo_cc['descripcion_economica']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
    require_once "views/footer.php"; 
    }else{
        require_once '404.php';
    }
?>