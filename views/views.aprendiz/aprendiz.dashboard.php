<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-check-circle fa-3x"></i>
            <div class="info">
                <h4>Empresas seleccionadas</h4>
                <p><b><?php $sql_em = $conexion->prepare("SELECT * FROM muestra");
                        $sql_em->execute();
                        $resultado_em = $sql_em->rowCount();
                        echo $resultado_em; ?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-poll-h fa-3x"></i>
            <div class="info">
                <h4>Encuestas respondidas (GENERAL)</h4>
                <p id="title__1"><b><?php $sql_e = $conexion->prepare("SELECT * FROM muestra WHERE estado_encuesta = 'Finalizada'");
                                    $sql_e->execute();
                                    $resultado_e = $sql_e->rowCount();
                                    echo $resultado_e; ?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-calendar-minus fa-3x"></i>
            <div class="info">
                <h4>Faltantes (GENERAL)</h4>
                <p><b><?php echo ($resultado_em - $resultado_e); ?></b></p>
            </div>
        </div>
    </div>
</div>