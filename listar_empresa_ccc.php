<?php

if (!$_GET) {
    header('location: listar_empresa_ccc.php?pagina=1');
}

require 'views/session.php';
if(isset($_SESSION['usuario'])){
require_once 'views/header.php'; 

$sql__empresa = $conexion->prepare("SELECT * FROM empresas_2020");
$sql__empresa->execute();

$resultado__empresa = $sql__empresa->fetchAll();

$empresa_x_pagina = 600;

$total_empresa_db = $sql__empresa->rowCount();

$paginas = $total_empresa_db / $empresa_x_pagina;
$paginas = ceil($paginas);

$iniciar =  ($_GET['pagina'] - 1) * $empresa_x_pagina;

$sql_pagina = $conexion->prepare("SELECT * FROM empresas_2020 LIMIT :iniciar,:nempresas");
$sql_pagina->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
$sql_pagina->bindParam(':nempresas', $empresa_x_pagina, PDO::PARAM_INT);
$sql_pagina->execute();

$resultado_pagina = $sql_pagina->fetchAll();
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Escritorio | Lista empresas CCC</h1>
            <p>Bienvenido a la plataforma</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="listar_empresa_ccc.php?pagina=1">Empresas</a></li>
        </ul>
    </div>
    <?php
        switch($rol_persona){
            case 'Administrador':
                require_once 'views/view.admin/admin.lista_empresa_ccc.php';
            break;
            default:
                require_once 'blank-page.html';
            break;
        }
    ?>
</main>

<?php 
    require_once "views/footer.php"; 
}else{
    require_once '404.php';
}
?>