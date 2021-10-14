<?php



    /*Consulta nit empresas*/
    $consultaReporteActividad = $conexion->prepare('SELECT SUBSTRING(ciiu_actividad1,1,1) as s ,perspectiva_c_d,perspectiva_c,perspectiva_p_i,perspectiva_f,total_perspectivas FROM diagnostico_global 
    INNER JOIN empresas_2020 ON diagnostico_global.nit_empresa_d = empresas_2020.nit');
    $consultaReporteActividad->execute();
    $dataReporteActividad = $consultaReporteActividad->fetchAll();
    /*Fin consulta*/
    $consultaNitEmpresasI = $conexion->prepare('SELECT COUNT(*) as cuentaR FROM respuestas INNER JOIN empresas_2020 ON respuestas.nit_empresa = empresas_2020.nit');
    $consultaNitEmpresasI->execute();
    $dataConsultaNitEmpresasI = $consultaNitEmpresasI->fetch();

    $consultaDiagnosticoGlobal = $conexion->prepare('SELECT COUNT(*) as cuentaDG FROM diagnostico_global');
    $consultaDiagnosticoGlobal->execute();
    $dataDiagnosticoGlobal = $consultaDiagnosticoGlobal->fetch();
    if($dataDiagnosticoGlobal['cuentaDG']>0){
?>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3>Generación de reportes por Actividad Economica</h3>
            <!--Formulario diagnostico global-->
            <form action="dglobalActividad.php?" method="get">
                <div class="form-group">
                    <label for="">Clasificación Actividad Economica:</label>
                    <select class="form-control" name="sActividad">
                        <?php   
                                foreach($dataReporteActividad as $dataReporte):
                            ?>
                        <option value="<?php echo $dataReporte['s']; ?>"><?php echo $dataReporte['s']?></option>
                        <?php
                                endforeach;
                        ?>
                    </select>
                </div>
                <!--Checkbox diagnostico global-->
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-imput" type="radio" name="tipoReporte" value="dg" checked>
                        Diagnostico global
                    </label>
                </div>
                <!--Fin checkbox-->
                <button class="btn btn-primary mt-3" style="float: left; margin: 5px;" type="submit" title="Consultar Diagnosticos"><i class="fas fa-search"></i> Consultar</button>
            </form>
            <!--Fin formulario-->
            <br><br>
        </div>
    </div>
</div>
<?php
    }else{ echo '<div class="row"><div class="col-md-12"><div class="tile"><h3>No hay registros</h3></div></div></div>'; }
?>