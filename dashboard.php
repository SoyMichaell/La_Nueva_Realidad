<?php 
    require_once 'views/session.php';
    if(isset($_SESSION['usuario'])){
    require_once 'views/header.php'; 
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Escritorio | Panel de control</h1>
            <p>Bienvenido a la plataforma</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        </ul>
    </div>
    <?php
        switch($rol_persona){
            case 'Administrador':
                require_once 'views/view.admin/admin.dashboard.php'; // Requiere vista admin dashboard
            break;
            case 'Instructor':
                require_once 'views/view.instructor/ins.dashboard.php';
            break;
            case 'Aprendiz':
                require_once 'views/views.aprendiz/aprendiz.dashboard.php';
            break;
        }
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h1 id="titulo">La Nueva Realidad</h1>
                <p style="font-size: 18px;">El presente instrumento fué diseñado y estructurado por SENNOVA como parte del proyecto La Nueva Realidad: Microempresarios Casanareños Frente al Primer Año de Convivencia con el Covid-19. Instrumento de Diagnóstico, Análisis de Impacto e Identificación de Estrategias Innovadoras para la Recuperación del Sector, la información obtenida será utilizada para efectos académicos y su divulgación estará orientada a la Comunidad Académica SENA.</p>
                <div class="alert alert-info" role="alert">
                  <p style="font-size: 18px;"><i class="fas fa-info-circle"></i> El cargue de las respuestas dadas por los <b>MICROEMPRESARIOS</b> se realiza cada 24 horas despues de las 18:00</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
    require_once "views/footer.php"; 
    }else{
        require_once '404.php';
    }
?>