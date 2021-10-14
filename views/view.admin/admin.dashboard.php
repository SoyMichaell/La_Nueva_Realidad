<div class="row">
    <!--Datos iniciales Empresas registradas-->
    <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-archway fa-3x"></i>
            <div class="info">
                <h4>Empresas registradas</h4>
                <!--Esta consulta realiza el conteo del total de la población-->
                <p id="title__1"><b><?php $sql_e = $conexion->prepare("SELECT * FROM empresas_2020");
                                    $sql_e->execute();
                                    $resultado_e = $sql_e->rowCount();
                                    echo $resultado_e; ?></b></p>
                <!--Fin consulta-->
            </div>
        </div>
    </div>
    <!--Fin empresas registradas-->
    <!--Datos iniciales de administradores-->
    <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-user-lock fa-3x"></i>
            <div class="info">
                <h4>Administradores</h4>
                <!--Esta consulta permite tener el total de instructores vinculados-->
                <p id="title__1"><b><?php $sql_a = $conexion->prepare("SELECT * FROM persona WHERE rol = 'Administrador'");
                                    $sql_a->execute();
                                    $resultado_a = $sql_a->rowCount();
                                    echo $resultado_a; ?></b></p>
                <!--Fin consulta-->
            </div>
        </div>
    </div>
    <!--Fin datos administradores-->
    <!--Datos iniciales aprendices-->
    <div class="col-md-6 col-lg-3">
        <div class="widget-small warning coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
                <h4>Aprendices</h4>
                <!--Esta consulta permite tener la cantidad de aprendices vinculados a la plataforma-->
                <p id="title_1"><b><?php $sql_a = $conexion->prepare("SELECT * FROM persona WHERE (rol = 'Aprendiz' AND estado = 1) ");
                                    $sql_a->execute();
                                    $resultado_a = $sql_a->rowCount();
                                    echo $resultado_a; ?></b></p>
                <!--Fin de la consulta-->
            </div>
        </div>
    </div>
    <!--Fin aprendices-->
    <!--Datos iniciales de instructores-->
    <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-chalkboard-teacher fa-3x"></i>
            <div class="info">
                <h4>Instructores</h4>
                <!--Esta consulta permite tener el total de instructores vinculados-->
                <p id="title__1"><b><?php $sql_i = $conexion->prepare("SELECT * FROM persona WHERE (rol = 'Instructor' AND estado = 1 )");
                                    $sql_i->execute();
                                    $resultado_i = $sql_i->rowCount();
                                    echo $resultado_i; ?></b></p>
                <!--Fin consulta-->
            </div>
        </div>
    </div>
    <!--Fin datos instructores-->
    <!--Fin encuestas respondidas-->
</div>