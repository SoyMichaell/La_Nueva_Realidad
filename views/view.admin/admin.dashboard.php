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
                <p id="title_1"><b><?php $sql_a = $conexion->prepare("SELECT * FROM persona WHERE rol = 'Aprendiz'");
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
                <p id="title__1"><b><?php $sql_i = $conexion->prepare("SELECT * FROM persona WHERE rol = 'Instructor'");
                                    $sql_i->execute();
                                    $resultado_i = $sql_i->rowCount();
                                    echo $resultado_i; ?></b></p>
                <!--Fin consulta-->
            </div>
        </div>
    </div>
    <!--Fin datos instructores-->
    <!--Datos iniciales empresas selecciodas o empresas que indican el total de la muestra (Estas empresas son las que se van a encuestar)-->
    <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-check-circle fa-3x"></i>
            <div class="info">
                <h4>Empresas seleccionadas</h4>
                <!--Esta consulta permite observar el valor de la muestra-->
                <p><b><?php $sql_em = $conexion->prepare("SELECT * FROM muestra");
                        $sql_em->execute();
                        $resultado_em = $sql_em->rowCount();
                        echo $resultado_em; ?></b></p>
                <!--Fin consulta-->
            </div>
        </div>
    </div>
    <!--Fin empresas seleccionadas-->
    <!--Datos iniciales encuestas respondidas-->
    <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-poll-h fa-3x"></i>
            <div class="info">
                <h4>Encuestas respondidas</h4>
                <!--Esta consulta permite ver la cantidad de encuestas respondidas de la muestra-->
                <p id="title__1"><b><?php $sql_e = $conexion->prepare("SELECT * FROM muestra WHERE estado_encuesta = 'Finalizada'");
                                    $sql_e->execute();
                                    $resultado_e = $sql_e->rowCount();
                                    echo $resultado_e; ?></b></p>
                <!--Fin consulta-->
            </div>
        </div>
    </div>
    <!--Fin encuestas respondidas-->
    <!--Datos iniciales empresas faltantes por encuestar-->
    <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-calendar-minus fa-3x"></i>
            <div class="info">
                <h4>Faltantes</h4>
                <!--Se realiza una resta entre el total de empresas seleccionadas y el total de encuestas respondidas para obtener el valor de las faltante-->
                <p><b><?php echo ($resultado_em - $resultado_e); ?></b></p>
                <!--Fin-->
            </div>
        </div>
    </div>
    <!--Fin empresas faltantes-->
</div>