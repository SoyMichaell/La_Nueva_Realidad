<?php 
    require 'views/session.php';
    if(isset($_SESSION['usuario'])){
    require_once 'views/header.php'; 
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
    <?php
        switch($rol_persona){
            case 'Administrador':
                require_once 'views/view.admin/admin.reportes.php';
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