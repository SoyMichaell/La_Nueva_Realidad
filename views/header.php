<!DOCTYPE html>
<html lang="en">

<head>
    <title>La Nueva Realidad | SENA</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Biblioteca de google charts-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--Trae el logo--->
    <link rel="shortcut icon" href="<?php echo SERVERURL ?>assets/imagenes/logo.png" type="image/x-icon">
    <!--Estilos css-->
    <link rel="stylesheet" href="<?php echo SERVERURL ?>assets/estilos.css">
    <!--Estilos framework Bootstrap-->
    <link rel="stylesheet" type="text/css" href="<?php echo SERVERURL ?>assets/css/main.css">
    <!--Estilos fontawesome--->
    <link rel="stylesheet" href="<?php echo SERVERURL ?>assets/fontawesome-free/css/all.css">
    <!--Estilos dataTables-->
    <link rel="stylesheet" href="<?php echo SERVERURL ?>assets/dataTables/datatables.css">
</head>
<body class="app sidebar-mini">
    <!--Header-->
    <header class="app-header"><a class="app-header__logo" href="dashboard.php">La Nueva Realidad</a>
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <ul class="app-nav">
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <form action="controller/administrador.controlador.php" method="post">
                        <h5 class="text-center mt-4"><?php echo $data['nombre'] . " " . $data['apellido']; ?></h5>
                        <li>
                            <h5><button type="submit" class="dropdown-item" name="btnAccion" value="salir"><i class="fa fa-sign-out-alt fa-lg"></i> Cerrar sesión</button></h5>
                        </li>
                    </form>
                </ul>
            </li>
        </ul>
    </header>
    <!--Fin Header-->
    <!--Barra divisora-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <!--Barra Lateral-->
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <div>
                <p class="app-sidebar__user-name"><?php echo $data['nombre'] . " " . $data['apellido']; ?></p>
                <p class="app-sidebar__user-designation"><?php echo $data['rol']; ?></p>
            </div>
        </div>
        <?php
            switch($rol_persona){
                case 'Administrador':
                    require_once 'views/view.admin/admin.header.php';
                break;
                case 'Instructor':
                    require_once 'views/view.instructor/insheader.php';
                break;
                case 'Aprendiz':
                    require_once 'views/views.aprendiz/aprendiz.header.php';
                break;
            }
        ?>
    </aside>
    <!--Fin Barra lateral-->