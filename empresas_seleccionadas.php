<?php 
    require 'views/session.php';
    if(isset($_SESSION['usuario'])){
    require_once 'views/header.php'; 
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Escritorio | Empresas seleccionadas</h1>
            <p>Bienvenido a la plataforma</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Empresas</a></li>
        </ul>
    </div>
    <?php
        switch($rol_persona){
            case 'Instructor':
                require_once 'views/view.admin/admin.empresas_seleccionadas.php';
            break;
            case 'Aprendiz':
                require_once 'views/view.admin/admin.empresas_seleccionadas.php';
            break;
            default:
                require_once 'blank-page.html';
            break;
        }
    ?>
</main>
<?php require_once "views/footer.php"; ?>
<script src="assets/table.js"></script>
<?php }else{
    require_once '404.php';
} ?>