<?php
    /*Consulta nit empresas*/
    $consultaNitEmpresas = $conexion->prepare('SELECT nit_empresa,razon_social,fecha FROM respuestas INNER JOIN empresas_2020 ON respuestas.nit_empresa=empresas_2020.nit ORDER BY fecha desc');
    $consultaNitEmpresas->execute();
    $dataConsultaNitEmpresas = $consultaNitEmpresas->fetchAll();
    /*Fin consulta*/
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
                        <option value="<?php echo $dataNitEmpresas['nit_empresa']; ?>">
                            <?php echo $dataNitEmpresas['nit_empresa'].' | '.$dataNitEmpresas['razon_social']?></option>
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
        <div class="tile" id="tile-diagnostico">
            <?php
                $consultaEmpresa = $conexion->prepare('SELECT * FROM diagnostico_global
                INNER JOIN empresas_2020 ON diagnostico_global.nit_empresa_d=empresas_2020.nit ORDER BY fecha_registro_d_g desc');
                $consultaEmpresa->execute();
                $dataEmpresa = $consultaEmpresa->fetchAll(PDO::FETCH_ASSOC);
                $cuenta = $consultaEmpresa->rowCount();
                if($cuenta>0){
            ?>
            <h3>Reportes Globales Generados <small><span class="badge badge-info"><?php echo $cuenta; ?></span></small></h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nit</th>
                        <th>Razón social</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($dataEmpresa as $empresa) :
                    ?>
                    <tr>
                        <td><?php echo $empresa['nit_empresa_d']; ?></td>
                        <td><?php echo $empresa['razon_social']; ?></td>
                        <td><a class="btn btn-info" href="dglobal.php?nitEmpresaConsultar=<?php echo $empresa['nit_empresa_d']; ?>&tipoReporte=dg" title="Ver"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Eliminar</button>
            <a class="btn btn-info" href="pdf.php" target="_blank">Generar PDF</a>
            <?php } else{ echo '<div class="alert alert-info"><p style="font-size:24px"><i class="fas fa-info-circle"></i> No hay diagnosticos almacenadoss</p></div>'; } ?>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Está seguro de eliminar los reportes?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form class="" action="controller/empresa.controlador.php" method="post">
            <button type="submit" class="btn btn-primary" name="btnAccion" value="EliminarReportes">Aceptar</button>
        </form>
      </div>
    </div>
  </div>
</div>
