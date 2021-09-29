<div class="row">
    <div class="col-md-8">
        <div class="tile">
            <h4 id="titulo">Listado de empresas vinculadas.</h4>
            <div class="tile-title-w-btn">
                <h3 class="title" id="titulo">Acciones</h3>
                <div class="btn-group"><a class="btn btn-primary" href="views/view.excel/listado_empresas_ccc.php" title="Descarga registros"><i class="fa fa-file-excel"></i></a></div>
            </div>
            <!--Formulario de busqueda empresas-->
            <form class="d-flex justify-content-end" action="buscar_empresa_ccc.php" method="get">
                <div class="row">
                    <div class="col">
                        <input class="form-control" name="busqueda" id="busqueda_ccc" type="text" placeholder="Buscar...." style="width: 250px;">
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" value="Buscar" type="submit" style="margin-left: -20px;">Buscar</button>
                    </div>
                </div>
            </form>
            <!--Fin formulario-->
            <!--Listado empresas poblacion TOTAL-->
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
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultado_pagina as $fila) : ?>
                        <tr>
                            <?php $idx = $fila['Id']; ?>
                            <td><?php echo $fila['Id'] ?></td>
                            <td><?php echo $fila['nit'] ?></td>
                            <td><?php echo $fila['razon_social'] ?></td>
                            <td><?php echo $fila['categoria'] ?></td>
                            <td><?php echo $fila['correo'] ?></td>
                            <td><?php echo $fila['municipio'] ?></td>
                            <td><?php echo $fila['personal'] ?></td>
                            <td>
                                <?php
                                /*Consulta estado, de las empresas indicando si fue o no seleecionada*/
                                $consulta_estado = $conexion->prepare("SELECT * FROM muestra WHERE id_empresa = $idx ");
                                $consulta_estado->execute();
                                /*Fin consulta*/
                                if ($consulta_estado->rowCount() > 0) { ?>
                                    <div class="badge badge-pill badge-primary">Seleccionada</div>
                                <?php } else { ?>
                                    <div class="badge badge-pill badge-danger">No seleccionada</div>
                                <?php } ?>
                            </td>
                            <td><a class='btn btn-primary' href='registrar_empresa_ccc.php?id=<?php echo $fila['Id'] ?>'>Editar</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <!--Fin listado-->
            <!--Paginador-->
            <div class="tabla">
                <div class="container-fluid d-flex justify-content-end mt-3" id="navd">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
                                <a class="page-link" href="listar_empresa_ccc.php?pagina=<?php echo $_GET['pagina'] - 1; ?>">Anterior</a>
                            </li>
                            <?php for ($i = 0; $i < $paginas; $i++) : ?>
                                <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="listar_empresa_ccc.php?pagina=<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a></li>
                            <?php endfor; ?>
                            <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">
                                <a class="page-link" href="listar_empresa_ccc.php?pagina=<?php echo $_GET['pagina'] + 1; ?>">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--Fin paginador-->
        </div>
    </div>
    <div class="col-md-4">
        <!--Listado tipo empresas-->
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title" id="titulo">Listado tipo empresas</h3>
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
        <!--Fin listado-->
        <!--Listado categorias-->
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title" id="titulo">Listado categoria</h3>
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
        <!--Fin listado-->
        <!--Listado actividad economica-->
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title" id="titulo">Listado actividad economica</h3>
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
        <!--Fin listado-->
    </div>
</div>