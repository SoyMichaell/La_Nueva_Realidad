<?php
require 'views/session.php';
if(isset($_SESSION['usuario'])){
require_once 'views/header.php'; 
?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <?php
        if(empty($_GET['cuadroA'])){error_reporting(0);}else{$cuadroA = $_GET['cuadroA']; $cuadroA;}
        if(empty($_GET['cuadroB'])){error_reporting(0);}else{$cuadroB = $_GET['cuadroB'];$cuadroB;}
        if(empty($_GET['cuadroC'])){error_reporting(0);}else{$cuadroC = $_GET['cuadroC'];$cuadroC;$consultaR = $conexion->prepare("SELECT * FROM comparativo_muestra_actividad WHERE id_actividad_c = '$cuadroC'");$consultaC->execute();$dataC = $consultaC->fetch();}
        if(empty($_GET['cuadroD'])){error_reporting(0);}else{$cuadroD = $_GET['cuadroD'];$cuadroD;}
        if(empty($_GET['cuadroE'])){error_reporting(0);}else{$cuadroE = $_GET['cuadroE'];$cuadroE;}
        if(empty($_GET['cuadroF'])){error_reporting(0);}else{$cuadroF = $_GET['cuadroF'];$cuadroF;}
        if(empty($_GET['cuadroG'])){error_reporting(0);}else{$cuadroG = $_GET['cuadroG'];$cuadroG;}
        if(empty($_GET['cuadroH'])){error_reporting(0);}else{$cuadroH = $_GET['cuadroH'];$cuadroH;}
        if(empty($_GET['cuadroI'])){error_reporting(0);}else{$cuadroI = $_GET['cuadroI']; $cuadroI;}
        if(empty($_GET['cuadroJ'])){error_reporting(0);}else{$cuadroJ = $_GET['cuadroJ'];$cuadroJ;}
        if(empty($_GET['cuadroK'])){error_reporting(0);}else{$cuadroK = $_GET['cuadroK'];$cuadroK;}
        if(empty($_GET['cuadroL'])){error_reporting(0);}else{$cuadroL = $_GET['cuadroL'];$cuadroL;}
        if(empty($_GET['cuadroM'])){error_reporting(0);}else{$cuadroM = $_GET['cuadroM'];$cuadroM;}
        if(empty($_GET['cuadroN'])){error_reporting(0);}else{$cuadroN = $_GET['cuadroN'];$cuadroN;}
        if(empty($_GET['cuadroP'])){error_reporting(0);}else{$cuadroP = $_GET['cuadroP'];$cuadroP;}
        if(empty($_GET['cuadroQ'])){error_reporting(0);}else{$cuadroQ = $_GET['cuadroQ'];$cuadroQ;}
        if(empty($_GET['cuadroR'])){error_reporting(0);}else{$cuadroR = $_GET['cuadroR'];$cuadroR;$consultaR = $conexion->prepare("SELECT * FROM comparativo_muestra_actividad WHERE id_actividad_c = '$cuadroR'");$consultaR->execute();$dataR = $consultaR->fetch();}
        if(empty($_GET['cuadroS'])){error_reporting(0);}else{$cuadroS = $_GET['cuadroS'];$cuadroS;}
    
        if(empty($_GET[0]=['cuadroR'] || $_GET[0]=['cuadroC'])){
            echo 'vacio';
        }else{
            echo $cuadroR;
            echo $cuadroC;
            $pcdR = $dataR['perspectiva_c_d']; $pcR = $dataR['perspectiva_c']; $piR = $dataR['perspectiva_p_i']; $pfR = $dataR['perspectiva_f']; $ptR = $dataR['total_perspectiva'];
            $pcdC = $dataC['perspectiva_c_d']; $pcC = $dataC['perspectiva_c']; $piC = $dataC['perspectiva_p_i']; $pfC = $dataC['perspectiva_f']; $ptC = $dataC['total_perspectiva'];
            $tpcd = 0;
            $tpcd = ($pcdR+$pcdC); 
            $tpc = ($pcR+$pcdC)/2; 
            $tpi = ($piR+$piC)/2; 
            $tpf = ($pfR+$pfC)/2; 
            $tt = ($ptR+$ptC)/2;
        }
    ?>
                <table border="2">
                    <thead>
                        <tr>
                            <th>Perspectiva de crecimiento y desarrollo</th>
                            <th>Perspectiva de clientes</th>
                            <th>Perspectiva de procesos internos</th>
                            <th>Perspectiva financiera</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $tpcd; ?></td>
                            <td><?php echo $tpc; ?></td>
                            <td><?php echo $tpi; ?></td>
                            <td><?php echo $tpf; ?></td>
                            <td><?php echo $tt; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php 
    require_once 'views/footer.php';
    }else{
        require_once '404.php';
    }
?>