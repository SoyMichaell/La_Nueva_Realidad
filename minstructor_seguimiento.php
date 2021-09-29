<?php 
    require 'views/session.php';
    if(isset($_SESSION['usuario'])){
    require_once 'views/header.php';
?>
<main class="app-content">
    <?php
        switch($rol_persona){
            case 'Instructor':
                require_once 'views/view.admin/admin.minstructor_seguimiento.php';
            break;
            default:
                require_once 'blank-page.html';
            break;
        }
    ?>
</main>
<?php require_once "views/footer.php"; ?>
<script src="assets/table.js"></script>
<?php
    }else{
        require_once '404.php';
    }
?>