<?php
require 'views/session.php';
if(isset($_SESSION['usuario'])){
require_once 'views/header.php'; 
?>
<main class="app-content">
    <div class="row">
        <div class="tile">
            <?php
                /*Derecha*/
                if(empty($_GET['cuadroA'])){error_reporting(0);}else{$cuadroA = $_GET['cuadroA']; $cuadroA;}
                if(empty($_GET['cuadroB'])){error_reporting(0);}else{$cuadroB = $_GET['cuadroB'];$cuadroB;}
                if(empty($_GET['cuadroC'])){error_reporting(0);}else{$cuadroC = $_GET['cuadroC'];$cuadroC;}
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
                if(empty($_GET['cuadroR'])){error_reporting(0);}else{$cuadroR = $_GET['cuadroR'];$cuadroR;}
                if(empty($_GET['cuadroS'])){error_reporting(0);}else{$cuadroS = $_GET['cuadroS'];$cuadroS;}
                /*Validación comparaciones*/
                if($_GET['cuadroR'] || $_GET['cuadroC']){
                    echo $cuadroC.'-'-$cuadroR;
                }
                /*Izquierda*/
                if(empty($_GET['cuadroAa'])){error_reporting(0);}else{$cuadroAa = $_GET['cuadroAa']; $cuadroAa;}
                if(empty($_GET['cuadroBb'])){error_reporting(0);}else{$cuadroBb = $_GET['cuadroBb'];$cuadroBb;}
                if(empty($_GET['cuadroCc'])){error_reporting(0);}else{$cuadroCc = $_GET['cuadroCc'];$cuadroCc;}
                if(empty($_GET['cuadroDd'])){error_reporting(0);}else{$cuadroDd = $_GET['cuadroDd'];$cuadroDd;}
                if(empty($_GET['cuadroEe'])){error_reporting(0);}else{$cuadroEe = $_GET['cuadroEe'];$cuadroEe;}
                if(empty($_GET['cuadroFf'])){error_reporting(0);}else{$cuadroFf = $_GET['cuadroFf'];$cuadroFf;}
                if(empty($_GET['cuadroGg'])){error_reporting(0);}else{$cuadroGg = $_GET['cuadroGg'];$cuadroGg;}
                if(empty($_GET['cuadroHh'])){error_reporting(0);}else{$cuadroHh = $_GET['cuadroHh'];$cuadroHh;}
                if(empty($_GET['cuadroIi'])){error_reporting(0);}else{$cuadroIi = $_GET['cuadroIi']; $cuadroIi;}
                if(empty($_GET['cuadroJj'])){error_reporting(0);}else{$cuadroJj = $_GET['cuadroJj'];$cuadroJj;}
                if(empty($_GET['cuadroKk'])){error_reporting(0);}else{$cuadroKk = $_GET['cuadroKk'];$cuadroKk;}
                if(empty($_GET['cuadroLl'])){error_reporting(0);}else{$cuadroLl = $_GET['cuadroLl'];$cuadroLl;}
                if(empty($_GET['cuadroMm'])){error_reporting(0);}else{$cuadroMm = $_GET['cuadroMm'];$cuadroMm;}
                if(empty($_GET['cuadroNn'])){error_reporting(0);}else{$cuadroNn = $_GET['cuadroNn'];$cuadroNn;}
                if(empty($_GET['cuadroPp'])){error_reporting(0);}else{$cuadroPp = $_GET['cuadroPp'];$cuadroPp;}
                if(empty($_GET['cuadroQq'])){error_reporting(0);}else{$cuadroQq = $_GET['cuadroQq'];$cuadroQq;}
                if(empty($_GET['cuadroRr'])){error_reporting(0);}else{$cuadroRr = $_GET['cuadroRr'];$cuadroRr;}
                if(empty($_GET['cuadroSs'])){error_reporting(0);}else{$cuadroSs = $_GET['cuadroSs'];$cuadroSs;}





            ?>
        </div>
    </div>
</main>
<?php
require_once 'views/footer.php';
}else{require_once '404.php';}
?>