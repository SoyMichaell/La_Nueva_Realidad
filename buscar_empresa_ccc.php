<?php

$busqueda = strtolower($_REQUEST['busqueda']);

if (!$_GET['pagina']) {
    header('location: buscar_empresa_ccc.php?pagina=1&busqueda=' . $busqueda);
}

require 'views/session.php';
require_once 'views/header.php'; 
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Escritorio | Lista empresas CCC</h1>
            <p>Bienvenido a la plataforma</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Empresas</a></li>
        </ul>
    </div>
    <?php
    if (empty($busqueda)) {
        header("location: listar_empresa_ccc.php");
    }
    ?>
    <div class="row">
        <div class="col-md-8">
            <div class="tile">
                <h4>Listado de empresas vinculadas.</h4>
                <div class="tile-title-w-btn">
                    <h3 class="title">Acciones</h3>
                    <div class="btn-group"><a class="btn btn-primary" href="views/view.excel/listado_empresas.php" title="Descarga registros"><i class="fa fa-file-excel-o"></i></a></div>
                </div>

                <form class="d-flex justify-content-end" action="buscar_empresa_ccc.php" method="get">
                    <div class="row">
                        <div class="col">
                            <input class="form-control" name="busqueda" id="busqueda_ccc" type="text" placeholder="Buscar...." value="<?php echo $busqueda; ?>" style="width: 250px;">
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" value="Buscar" type="submit" style="margin-left: -20px;">Buscar</button>
                        </div>
                    </div>
                </form>

                <table class='table table-bordered table-striped mt-2'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nit</th>
                            <th>Razón social</th>
                            <th>Categoria</th>
                            <th>Correo</th>
                            <th>Municipio</th>
                            <th>Personal</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_empresas_2020 = $conexion->prepare("SELECT * FROM empresas_2020 WHERE 
                                Id LIKE '%$busqueda%' OR nit LIKE '%$busqueda%' OR razon_social LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' OR correo LIKE '%$busqueda%' OR municipio LIKE '%$busqueda%' OR personal LIKE '%$busqueda%'");
                        $sql_empresas_2020->execute();
                        $total_empresas_2020 = $sql_empresas_2020->rowCount();
                        $data_empresas_2020 = $sql_empresas_2020->fetchAll(PDO::FETCH_ASSOC);
                        $por_pagina = 300;

                        if (empty($_GET['pagina'])) {
                            $pagina = 1;
                        } else {
                            $pagina = $_GET['pagina'];
                        }

                        $iniciar = ($pagina - 1) * $por_pagina;
                        $pagina = ceil($total_empresas_2020 / $por_pagina);

                        $query = $conexion->prepare("SELECT * FROM empresas_2020 WHERE 
                            Id LIKE '%$busqueda%' OR nit LIKE '%$busqueda%' OR razon_social LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' OR correo LIKE '%$busqueda%' OR municipio LIKE '%$busqueda%' OR personal LIKE '%$busqueda%' LIMIT $iniciar,$por_pagina");
                        $query->execute();
                        $data_query = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($data_query as $fila) :
                        ?>
                            <tr>
                                <td><?php echo $fila['Id']; $idx = $fila['Id']; ?></td>
                                <td><?php echo $fila['nit'] ?></td>
                                <td><?php echo $fila['razon_social'] ?></td>
                                <td><?php echo $fila['categoria'] ?></td>
                                <td><?php echo $fila['correo'] ?></td>
                                <td><?php echo $fila['municipio'] ?></td>
                                <td><?php echo $fila['personal'] ?></td>
                                <td><a class='btn btn-primary' href='registrar_empresa_ccc.php?id=<?php echo $fila['Id'] ?>'>Editar</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>


                <div class="tabla">
                    <div class="container-fluid d-flex justify-content-end mt-3" id="navd">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="buscar_empresa_ccc.php?pagina=<?php echo $_GET['pagina'] - 1; ?>&busqueda=<?php echo $busqueda; ?>">Anterior</a>
                                </li>
                                <?php for ($i = 0; $i < $pagina; $i++) { ?>
                                    <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="buscar_empresa_ccc.php?pagina=<?php echo $i + 1; ?>&busqueda=<?php echo $busqueda; ?>"><?php echo $i + 1; ?></a></li>
                                <?php } ?>
                                <li class="page-item <?php echo $_GET['pagina'] >= $pagina ? 'disabled' : '' ?>">
                                    <a class="page-link" href="buscar_empresa_ccc.php?pagina=<?php echo $_GET['pagina'] + 1; ?>&busqueda=<?php echo $busqueda; ?>">Siguiente</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
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
                            <tr>
                                <td>0</td>
                                <td>ESTABLECIMIENTO</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>PRINCIPAL</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SUCURSAL</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>AGENCIA</td>
                            </tr>
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
<?php require_once "views/footer.php"; ?>