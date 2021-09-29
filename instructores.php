<?php 
    require 'views/session.php';
    if(isset($_SESSION['usuario'])){
    require_once 'views/header.php'; 
?>
<main class="app-content">
    <?php
        switch($rol_persona){
            case 'Administrador':
                require_once 'views/view.admin/admin.instructores.php';
            break;
            default:
                require_once 'blank-page.html';
            break;
        }
    ?>
</main>
<?php 
    require_once 'views/footer.php'; 
    }else{
        require_once '404.php';
    }
?>



<!--
Sacar llistado de instructores de los aprendices vinculados
generar los aleatorios con los id que son
-->