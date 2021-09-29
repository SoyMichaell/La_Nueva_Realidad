<?php 
require 'views/session.php';
if(isset($_SESSION['usuario'])){
require_once 'views/header.php'; 
$nitEmpresa = $_GET['nitEmpresaConsultar'];
$tipoReporte = $_GET['tipoReporte'];
$consultaEmpresa = $conexion->prepare("SELECT * FROM empresas_2020 WHERE nit = '$nitEmpresa'");
$consultaEmpresa->execute();
$dataEmpresa = $consultaEmpresa->fetch(PDO::FETCH_ASSOC);
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Escritorio | Diagnostico</h1>
            <p>Bienvenido a la plataforma</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="reportes.php">Reportes</a></li>
        </ul>
    </div>
    <div class="d-flex justify-content-end" style="margin-top: -1%;">
        <a class="btn btn-primary" href="reportes.php?nitEmpresa=<?php echo $nitEmpresa;?>&tipoReporte=<?php echo $tipoReporte;?>">Volver</a>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="tile">
                <h3>Datos empresa</h3>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th style="width: 20%; font-size: 20px;">Nit Empresa</th>
                        <td style="font-size: 20px;"><?php echo $nitEmpresa; ?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%; font-size: 20px;">Razón Social</th>
                        <td style="font-size: 20px;"><?php echo $dataEmpresa['razon_social']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php
    switch ($_GET['tipoReporte']) {
        case 'dg': ?>
            <?php require_once "views/view.reporte/pcd.php"; ?>
            <div class="row">
                <div class="col-md-9">
                    <div class="tile">
                        <h3>Diagnostico global</h3>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="font-size: 20px;">Perspectiva</th>
                                    <th style="font-size: 20px;">Porcentaje</th>
                                    <th style="font-size: 20px;">Maximo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="title_per">Perspectiva de crecimiento y desarrollo</td>
                                    <td id="title_v" class="<?php if ($contadoDC >= 12 && $contadoDC <= 25) {
                                                                echo 'bg-success text-white';
                                                            } else if ($contadoDC >= 7 && $contadoDC < 12) {
                                                                echo 'bg-warning';
                                                            } else if ($contadoDC > 0 && $contadoDC < 7) {
                                                                echo 'bg-danger text-white';
                                                            } ?>" style="font-size: 25px;"><?php echo $porcentajeDC; ?></td>
                                    <td id="title_t">25</td>
                                </tr>
                                <tr>
                                    <td id="title_per">Perspectiva de clientes</td>
                                    <td id="title_v" class="<?php if ($contadoPC >= 12 && $contadoPC <= 25) {
                                                                echo 'bg-success text-white';
                                                            } else if ($contadoPC >= 7 && $contadoPC < 12) {
                                                                echo 'bg-warning';
                                                            } else if ($contadoPC > 0 && $contadoPC < 7) {
                                                                echo 'bg-danger text-white';
                                                            } ?>"><?php echo $porcentajePC; ?></td>
                                    <td id="title_t">25</td>
                                </tr>
                                <tr>
                                    <td id="title_per">Perspectiva de procesos internos</td>
                                    <td id="title_v" class="<?php if ($contadoPCI >= 12 && $contadoPCI <= 25) {
                                                                echo 'bg-success text-white';
                                                            } else if ($contadoPCI >= 7 && $contadoPCI < 12) {
                                                                echo 'bg-warning';
                                                            } else if ($contadoPCI > 0 && $contadoPCI < 7) {
                                                                echo 'bg-danger text-white';
                                                            } ?>"><?php echo $porcentajePCI; ?></td>
                                    <td id="title_t">25</td>
                                </tr>
                                <tr>
                                    <td id="title_per">Perspectiva financiera</td>
                                    <td id="title_v" class="<?php if ($contadoPF >= 12 && $contadoPF <= 25) {
                                                                echo 'bg-success text-white';
                                                            } else if ($contadoPF >= 7 && $contadoPF < 12) {
                                                                echo 'bg-warning';
                                                            } else if ($contadoPF > 0 && $contadoPF < 7) {
                                                                echo 'bg-danger text-white';
                                                            } ?>"><?php echo $porcentajePF; ?></td>
                                    <td id="title_t">25</td>
                                </tr>
                                <tr>
                                    <td id="title_per">Total</td>
                                    <td id="title_v" class="<?php if ($suma >= 70 && $suma <= 100) {
                                                                echo 'bg-success text-white';
                                                            } else if ($suma >= 40 && $suma < 70) {
                                                                echo 'bg-warning';
                                                            } else if ($suma >= 0 && $suma < 40) {
                                                                echo 'bg-danger text-white';
                                                            } ?>"><?php echo $suma; ?></td>
                                    <td id="title_t">100</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-start">
                            <form action="controller/empresa.controlador.php" method="post">
                            <?php
                                $ciiu = $dataEmpresa['ciiu_actividad1'];
                            ?>
                                <input type="hidden" name="ciiu" value="<?php echo $ciiu[0] ?>" readonly>
                                <input type="hidden" name="nitEmpresaDG" value="<?php echo $nitEmpresa; ?>" readonly>
                                <input type="hidden" name="perspectivaCD" value="<?php echo $porcentajeDC; ?>" readonly>
                                <input type="hidden" name="perspectivaPC" value="<?php echo $porcentajePC; ?>" readonly>
                                <input type="hidden" name="perspectivaPCI" value="<?php echo $porcentajePCI; ?>" readonly>
                                <input type="hidden" name="perspectivaPF" value="<?php echo $porcentajePF; ?>" readonly>
                                <input type="hidden" name="perspectivaTT" value="<?php echo $suma; ?>" readonly>
                                <input type="hidden" name="tipoDiag" value="<?php echo $tipoReporte; ?>" readonly>
                                <?php
                                    $consultaDiagnostico = $conexion->prepare('SELECT * FROM diagnostico_global WHERE nit_empresa_d = :nitempresa');
                                    $consultaDiagnostico->execute(array('nitempresa' => $nitEmpresa));
                                    if($consultaDiagnostico->rowCount()>0){ ?>
                                        <button class="btn btn-primary" disabled><i class="fas fa-save"></i> Guardar Diagnostico</button>
                                        <button class="btn btn-danger" name="btnAccion" value="EliminarDiagnosticoEsp" title="Eliminar Diagnostico Generado" type="submit"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                <?php }else{ ?>
                                        <button class="btn btn-primary" name="btnAccion" value="GuardarDiagnosticoEsp" title="Guardar Diagnostico en la Base de Datoss" type="submit"><i class="fas fa-save"></i> Guardar</button>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tile">
                        <h3>Tabla de COLORIMETRIA</h3>
                        <table class="table table-bordered table-hover">
                            <tr>
                                <td class="bg-success text-white" style="font-size: 18px;">Verde: Mayor igual a 70% y Menor igual a 100%</td>
                            </tr>
                            <tr>
                                <td class="bg-warning" style="font-size: 18px;">Amarillo: Mayor igual Entre 40% y Menor a 70% </td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white" style="font-size: 18px;">Rojo: Mayor o igual a 0% y Menor a 40%</td>
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
                                    ['<?php echo 'Perspectiva de Crecimiento y Desarrollo' ?>', <?php echo $contadoDC ?>],
                                    ['<?php echo 'Perspectiva de Clientes' ?>', <?php echo $contadoPC ?>],
                                    ['<?php echo 'Perspectiva de Procesos Internos' ?>', <?php echo $contadoPCI ?>],
                                    ['<?php echo 'Perspectiva Financiera' ?>', <?php echo $contadoPF ?>]
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div6'));

                                chart.draw(data, options);
                            }
                        </script>
                        <div id="chart_div6"></div>
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