<?php
    /*Consulta nit empresas*/
    $consultaNitEmpresas = $conexion->prepare('SELECT * FROM respuestas INNER JOIN empresas_2020 ON respuestas.nit_empresa = empresas_2020.nit ORDER BY fecha desc ');
    $consultaNitEmpresas->execute();
    $dataConsultaNitEmpresas = $consultaNitEmpresas->fetchAll();
    /*Fin consulta*/
    $consultaNitEmpresasI = $conexion->prepare('SELECT COUNT(*) as cuentaR FROM respuestas INNER JOIN empresas_2020 ON respuestas.nit_empresa = empresas_2020.nit');
    $consultaNitEmpresasI->execute();
    $dataConsultaNitEmpresasI = $consultaNitEmpresasI->fetch();
      echo $dataConsultaNitEmpresasI['cuentaR'];
    if($dataConsultaNitEmpresasI['cuentaR']>0){
?>
<div class="row">
    <div class="col-md-8">
        <div class="tile p-3">
            <h3>Generación de reportes</h3>
            <!--Formulario diagnostico global-->
            <form action="dglobal.php?" method="get">
                <div class="form-group">
                    <label for="">Nit de la empresa:</label>
                    <select class="form-control" name="nitEmpresaConsultar">
                        <?php
                            foreach($dataConsultaNitEmpresas as $dataNitEmpresas):
                        ?>
                        <option value="<?php echo $dataNitEmpresas['nit']; ?>">
                            <?php echo $dataNitEmpresas['nit'].' | '.$dataNitEmpresas['razon_social']?></option>
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
                <!--Checkbox diagnostico detallado-->
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-imput" type="radio" name="tipoReporte" value="dd">
                        Diagnostico detallado
                    </label>
                </div>
                <!---->
                <button class="btn btn-primary mt-3" type="submit" title="Consultar Diagnosticos"><i class="fas fa-search"></i> Consultar</button>
            </form>
            <!--Fin formulario-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="tile">
            <?php
                $consultaEmpresa = $conexion->prepare("SELECT * FROM diagnostico_global");
                $consultaEmpresa->execute();
                $dataEmpresa = $consultaEmpresa->fetchAll(PDO::FETCH_ASSOC);
                if($consultaEmpresa->rowCount()>0){
            ?>
            <h3>Reportes Globales Generados</h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nit empresa</th>
                        <th>Municipio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($dataEmpresa as $empresa) :
                    ?>
                    <tr>
                        <td><?php echo $empresa['nit_empresa_d']; ?></td>
                        <td><?php echo $empresa['fecha_registro_d_g']; ?></td>
                        <td><a class="btn btn-info" href="dglobal.php?nitEmpresaConsultar=<?php echo $empresa['nit_empresa_d']; ?>&tipoReporte=dg" title="Ver"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php } else{ echo '<div class="alert alert-info"><p style="font-size:24px"><i class="fas fa-info-circle"></i> No hay diagnosticos almacenadoss</p></div>'; } ?>
        </div>
    </div>
</div>
<?php
    }else{ echo '<div class="tile"><h3>No hay registros</h3></div>'; }
?>
