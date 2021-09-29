<?php 
    require 'views/session.php';
    require_once 'views/header.php'; 
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Escritorio | Información general</h1>
            <p>Bienvenido a la plataforma</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Información</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="tile">
                <h4 id="titulo"><i class="fa fa-book"></i> Manual de usuario</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>--</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <th>Manual de usuario</th>
                            <th><a class="btn btn-primary"
                                    href="assets/documentos/Manual de usuario PLATAFORMA LA NUEVA REALIDAD ADMIN.pdf"
                                    target="_blank"><i class="fa fa-download"></i></a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <div class="tile">
                <h4 id="titulo"><i class="fa fa-file-excel"></i> Listados</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>--</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <th>Listado aprendices e instructores</th>
                            <th><a class="btn btn-primary" href="views/view.excel/listado_registro.php"><i
                                        class="fa fa-download"></i></a></th>
                        </tr>
                        <tr>
                            <td>2</td>
                            <th>Listado empresas</th>
                            <th><a class="btn btn-primary" href="views/view.excel/listado_empresas_ccc.php"><i
                                        class="fa fa-download"></i></a></th>
                        </tr>
                        <tr>
                            <td>3</td>
                            <th>Listado empresas seleccionadas para la muestra</th>
                            <th><a class="btn btn-primary" href="views/view.excel/listado_empresas_muestra.php"><i
                                        class="fa fa-download"></i></a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--<div class="col-md-4 mx-auto">
            <div class="tile">
                <h4 id="titulo"><i class="fa fa-globe-americas"></i> Usuario activos</h4>
                <table class="table">
                    <thead>
                        <th>Nombre Completo</th>
                        <th>Estado</th>
                    </thead>
                    <tbody>
                        <?php 
                            /*$consultaEstadoEnLinea = $conexion->prepare('SELECT * FROM persona WHERE estado = "En Linea"');
                            $consultaEstadoEnLinea->execute();
                            $dataEstado = $consultaEstadoEnLinea->fetchAll(PDO::FETCH_ASSOC);
                            foreach($dataEstado as $estado):*/
                        ?>
                        <tr>
                            <td style="font-size: 18px;"><?php //echo $estado['nombre'].' '.$estado['apellido']; ?></td>
                            <td style="font-size: 18px;"><i class="fa fa-check-circle"></i></td>
                        </tr>
                        <?php //endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>-->
    </div>
</main>
<?php require_once "views/footer.php"; ?>