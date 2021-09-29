<?php 
require 'views/session.php';
if(isset($_SESSION['usuario'])){
require_once 'views/header.php'; 
$sActividad = $_GET['sActividad'];
$tipoReporte = $_GET['tipoReporte'];

$consultaActividadEconomica = $conexion->prepare("SELECT * FROM diagnostico_global
INNER JOIN empresas_2020 ON diagnostico_global.nit_empresa_d = empresas_2020.nit
INNER JOIN actividad_economica ON diagnostico_global.ciiu = actividad_economica.id_actividad    
WHERE ciiu = :ciiuA");
$consultaActividadEconomica->execute(array('ciiuA' => $sActividad));
$dataActividadEconomica = $consultaActividadEconomica->fetch(PDO::FETCH_ASSOC);
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Escritorio | Diagnostico</h1>
            <p>Bienvenido a la plataforma</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="reportes.php">Reportes por Actividad</a></li>
        </ul>
    </div>
    <div class="d-flex justify-content-end" style="margin-top: -1%;">
        <a class="btn btn-primary" href="reportesActividad.php">Volver</a>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="tile">
                <h3>Reporte por Actividad Economica</h3>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th style="width: 20%; font-size: 20px;">Clasificación Economica</th>
                        <td style="font-size: 20px;"><?php echo $dataActividadEconomica['id_actividad']; ?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%; font-size: 20px;">Descripción Economica</th>
                        <td style="font-size: 20px;"><?php echo $dataActividadEconomica['descripcion_economica']; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php
    switch ($_GET['tipoReporte']) {
        case 'dg': ?>
    <?php 
                $consultaSuma = $conexion->prepare('SELECT COUNT(*) AS cuentaActividad, SUM(perspectiva_c_d) AS pcd, SUM(perspectiva_c) AS pc, SUM(perspectiva_p_i) AS pii, 
                SUM(perspectiva_f) AS pf,SUBSTRING(ciiu_actividad1,1,1) AS actividad FROM diagnostico_global 
                INNER JOIN empresas_2020 ON diagnostico_global.nit_empresa_d = empresas_2020.nit WHERE ciiu = :sActividad');
                $consultaSuma->execute(array('sActividad' => $sActividad));
                $dataSuma = $consultaSuma->fetch(PDO::FETCH_ASSOC);
                
                $pcd = ($dataSuma['pcd']/$dataSuma['cuentaActividad']); 
                $pc = ($dataSuma['pc']/$dataSuma['cuentaActividad']); 
                $pii = ($dataSuma['pii']/$dataSuma['cuentaActividad']); 
                $pf = ($dataSuma['pf']/$dataSuma['cuentaActividad']);
                $sumaActividad = ($pcd + $pc + $pii + $pf);

            ?>
    <div class="row">
        <div class="col-md-9">
            <div class="tile">
                <form action="controller/empresa.controlador.php" method="POST">
                    <h3>Diagnostico Global Por Actividad Economica</h3>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="font-size: 20px;">Perspectiva</th>
                                <th style="font-size: 20px;">Porcentaje</th>
                                <th style="font-size: 20px;">Maximo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <input type="hidden" name="codigo_a" value="<?php echo $dataActividadEconomica['id_actividad']; ?>" readonly>
                            <input type="hidden" name="pcd" value="<?php echo $pcd; ?>" readonly>
                            <input type="hidden" name="pc" value="<?php echo $pc; ?>" readonly>
                            <input type="hidden" name="pii" value="<?php echo $pii; ?>" readonly>
                            <input type="hidden" name="pf" value="<?php echo $pf; ?>" readonly>
                            <input type="hidden" name="sumaActividad" value="<?php echo $sumaActividad; ?>" readonly>
                            <tr>
                                <td id="title_per">Perspectiva de crecimiento y desarrollo</td>
                                <td id="title_v" class="<?php if ($pcd >= 12 && $pcd <= 25) {
                                                                echo 'bg-success text-white';
                                                            } else if ($pcd >= 7 && $pcd < 12) {
                                                                echo 'bg-warning';
                                                            } else if ($pcd > 0 && $pcd < 7) {
                                                                echo 'bg-danger text-white';
                                                            } ?>" style="font-size: 25px;"><?php echo $pcd; ?></td>
                                <td id="title_t">25</td>
                            </tr>
                            <tr>
                                <td id="title_per">Perspectiva de clientes</td>
                                <td id="title_v" class="<?php if ($pc >= 12 && $pc <= 25) {
                                                                echo 'bg-success text-white';
                                                            } else if ($pc >= 7 && $pc < 12) {
                                                                echo 'bg-warning';
                                                            } else if ($pc > 0 && $pc < 7) {
                                                                echo 'bg-danger text-white';
                                                            } ?>"><?php echo $pc; ?></td>
                                <td id="title_t">25</td>
                            </tr>
                            <tr>
                                <td id="title_per">Perspectiva de procesos internos</td>
                                <td id="title_v" class="<?php if ($pii >= 12 && $pii <= 25) {
                                                                echo 'bg-success text-white';
                                                            } else if ($pii >= 7 && $pii < 12) {
                                                                echo 'bg-warning';
                                                            } else if ($pii > 0 && $pii < 7) {
                                                                echo 'bg-danger text-white';
                                                            } ?>"><?php echo $pii; ?></td>
                                <td id="title_t">25</td>
                            </tr>
                            <tr>
                                <td id="title_per">Perspectiva financiera</td>
                                <td id="title_v" class="<?php if ($pf >= 12 && $pf <= 25) {
                                                                echo 'bg-success text-white';
                                                            } else if ($pf >= 7 && $pf < 12) {
                                                                echo 'bg-warning';
                                                            } else if ($pf > 0 && $pf < 7) {
                                                                echo 'bg-danger text-white';
                                                            } ?>"><?php echo $pf; ?></td>
                                <td id="title_t">25</td>
                            </tr>
                            <tr>
                                <td id="title_per">Total</td>
                                <td id="title_v" class="<?php if ($sumaActividad >= 70 && $sumaActividad <= 100) {
                                                                echo 'bg-success text-white';
                                                            } else if ($sumaActividad >= 40 && $sumaActividad < 70) {
                                                                echo 'bg-warning';
                                                            } else if ($sumaActividad >= 0 && $sumaActividad < 40) {
                                                                echo 'bg-danger text-white';
                                                            } ?>"><?php echo $sumaActividad; ?></td>
                                <td id="title_t">100</td>
                            </tr>
                            <tr>
                                <td id="title_per">Total empresas por Actividada Economica</td>
                                <td rowspan="2" id="title_t"><?php echo $dataSuma['cuentaActividad']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex">
                        <div class="btn-group" role="group" aria-label="">
                            <?php
                                $estadoBoton = $conexion->prepare("SELECT * FROM comparativo_muestra_actividad WHERE id_actividad_c = :codigo");
                                $estadoBoton->execute(array('codigo' => $dataActividadEconomica['id_actividad']));
                                if($estadoBoton->rowCount()>0){?>
                                    <button type="submit" class="btn btn-primary" name="btnAccion" value="GuardarDiagnosticoA" disabled><i class="fas fa-save"></i></button>
                                    <button type="submit" class="btn btn-primary" name="btnAccion" value="ActualizarDiagnosticoA"><i class="fas fa-sync-alt"></i></button>
                                    <button type="submit" class="btn btn-primary" name="btnAccion" value="EliminarDiagnosticoA"><i class="fas fa-trash-alt"></i></button>
                            <?php }else{?>
                                    <button type="submit" class="btn btn-primary" name="btnAccion" value="GuardarDiagnosticoA"><i class="fas fa-save"></i></button>
                                    <button type="submit" class="btn btn-primary" name="btnAccion" value="ActualizarDiagnosticoA"><i class="fas fa-sync-alt"></i></button>
                                    <button type="submit" class="btn btn-primary" name="btnAccion" value="EliminarDiagnosticoA"><i class="fas fa-trash-alt"></i></button>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="tile">
                <h3>Tabla de COLORIMETRIA</h3>
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="bg-success text-white" style="font-size: 18px;">Verde: Mayor igual a 70% y Menor
                            igual a 100%</td>
                    </tr>
                    <tr>
                        <td class="bg-warning" style="font-size: 18px;">Amarillo: Mayor igual Entre 40% y Menor a 70%
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-danger text-white" style="font-size: 18px;">Rojo: Mayor o igual a 0% y Menor a 40%
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <script>
                google.charts.load('current', {
                    packages: ['corechart', 'bar']
                });
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                    var data = google.visualization.arrayToDataTable([
                        ['Perspectiva', 'Cuenta'],
                        ['<?php echo 'Perspectiva de Crecimiento y Desarrollo' ?>', <?php echo $pcd ?>],
                        ['<?php echo 'Perspectiva de Clientes' ?>', <?php echo $pc ?>],
                        ['<?php echo 'Perspectiva de Procesos Internos' ?>', <?php echo $pii ?>],
                        ['<?php echo 'Perspectiva Financiera' ?>', <?php echo $pf ?>]
                    ]);

                    var options = {
                        title: 'Cumplimiento perspectiva',
                        chartArea: {
                            width: '50%'
                        },
                        hAxis: {
                            title: 'Total',
                            minValue: 1
                        },
                        vAxis: {
                            title: 'Perspectiva'
                        }
                    };

                    var chart = new google.visualization.BarChart(document.getElementById(
                    'chart_div_actividad_global'));

                    chart.draw(data, options);
                }
                </script>
                <div id="chart_div_actividad_global"></div>
            </div>
        </div>
    </div>
    <?php break;
        case 'dd': ?>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3>Reporte diagnostico detallado</h3>
                <?php require_once "views/view.reporte/preguntas.php"; ?>
            </div>
        </div>
    </div>
    <?php break;
    } ?>
</main>
<br>
<?php 
    require_once "views/footer.php"; 
    }else{
        require_once '404.php';
    }
?>