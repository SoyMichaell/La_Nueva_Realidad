<div class="row">
    <div class="col-md-6">
        <div class="tile tile-border-top">
            <h4>Resultados Encuesta</h4>
            <p>Para visualizar de mejor manera, los resultados graficos de las encuestar hacer click en el enlace.</p>
            <h2><a href="https://docs.google.com/forms/d/1TOgPeyHYv8Nl74EP71P_N3W0G_Q21mzlHDSmPQpPtQ8/viewanalytics" title="Respuestas encuesta" target="_blank">Enlace</a></h2>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile tile-border-top">
            <h4>Categoria empresas</h4>
            <script>
                google.charts.load('current', {
                    packages: ['corechart', 'bar']
                });
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                    var data = google.visualization.arrayToDataTable([
                        <?php
                        $sql_sector = $conexion->prepare("SELECT nombre_categoria, count(*) as cuenta FROM empresas_2020 INNER JOIN categoria ON empresas_2020.categoria = categoria.id_categoria GROUP BY nombre_categoria");
                        $sql_sector->execute();
                        $data_sector = $sql_sector->fetchAll(PDO::FETCH_ASSOC); ?>['Categoria', '2021'],
                        <?php foreach ($data_sector as $sector) { ?>['<?php echo $sector['nombre_categoria'] ?>', <?php echo $sector['cuenta'] ?>],
                        <?php } ?>
                    ]);

                    var options = {
                        title: 'Categoria de las empresas',
                        chartArea: {
                            width: '50%'
                        },
                        hAxis: {
                            title: 'Total empresas',
                            minValue: 1
                        },
                        vAxis: {
                            title: 'Categoria'
                        }
                    };

                    var chart = new google.visualization.BarChart(document.getElementById('chart_div6'));

                    chart.draw(data, options);
                }
            </script>
            <div id="chart_div6"></div>
        </div>
    </div>
</div>      
<div class="row">
    <div class="col-md-6">
        <div class="tile tile-border-top">
            <h4>Empresas x Municipio General</h4>
            <script type="text/javascript">
                // Load the Visualization API and the corechart package.
                google.charts.load('current', {
                    'packages': ['corechart']
                });

                // Set a callback to run when the Google Visualization API is loaded.
                google.charts.setOnLoadCallback(drawChart);

                // Callback that creates and populates a data table,
                // instantiates the pie chart, passes in the data and
                // draws it.
                function drawChart() {

                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                        <?php
                        $sql_ccc = $conexion->prepare("SELECT municipio, count(*) as cuenta FROM empresas_2020 GROUP BY municipio");
                        $sql_ccc->execute();
                        $data_ccc = $sql_ccc->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($data_ccc as $ccc) :
                        ?>['<?php echo $ccc['municipio']; ?>', <?php echo $ccc['cuenta']; ?>],
                        <?php endforeach; ?>
                    ]);

                    // Set chart options
                    var options = {
                        'title': 'Empresas x Municipio (General)',
                        'is3D': false,
                        'width': '100%',
                        'height': 350
                    };

                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));
                    chart.draw(data, options);
                }
            </script>
            <!--Div that will hold the pie chart-->
            <div id="chart_div4"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile tile-border-top">
            <h4>Empresas x Municipio Muestra</h4>
            <script type="text/javascript">
                // Load the Visualization API and the corechart package.
                google.charts.load('current', {
                    'packages': ['corechart']
                });

                // Set a callback to run when the Google Visualization API is loaded.
                google.charts.setOnLoadCallback(drawChart);

                // Callback that creates and populates a data table,
                // instantiates the pie chart, passes in the data and
                // draws it.
                function drawChart() {

                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                        <?php
                        $sql_ccc = $conexion->prepare("SELECT municipio, count(*) as cuenta FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa=empresas_2020.Id GROUP BY municipio");
                        $sql_ccc->execute();
                        $data_ccc = $sql_ccc->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($data_ccc as $ccc) :
                        ?>['<?php echo $ccc['municipio']; ?>', <?php echo $ccc['cuenta']; ?>],
                        <?php endforeach; ?>
                    ]);

                    // Set chart options
                    var options = {
                        'title': 'Empresas x Municipio (Muestra)',
                        'is3D': false,
                        'width': 550,
                        'height': 350
                    };

                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
                    chart.draw(data, options);
                }
            </script>
            <!--Div that will hold the pie chart-->
            <div id="chart_div3"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="tile tile-border-top">
            <h4>Actividad economica General</h4>
            <script type="text/javascript">
                // Load the Visualization API and the corechart package.
                google.charts.load('current', {
                    'packages': ['corechart']
                });

                // Set a callback to run when the Google Visualization API is loaded.
                google.charts.setOnLoadCallback(drawChart);

                // Callback that creates and populates a data table,
                // instantiates the pie chart, passes in the data and
                // draws it.
                function drawChart() {

                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                    <?php
                        $sql_A = $conexion->prepare("SELECT count(*) as cuentaA FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'A'");
                        $sql_A->execute();
                        $data_A = $sql_A->fetch();
                        $sql_B = $conexion->prepare("SELECT count(*) as cuentaB FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'B'");
                        $sql_B->execute();
                        $data_B = $sql_B->fetch();
                        $sql_C = $conexion->prepare("SELECT count(*) as cuentaC FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'C'");
                        $sql_C->execute();
                        $data_C = $sql_C->fetch();
                        $sql_D = $conexion->prepare("SELECT count(*) as cuentaD FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'D'");
                        $sql_D->execute();
                        $data_D = $sql_D->fetch();
                        $sql_E = $conexion->prepare("SELECT count(*) as cuentaE FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'E'");
                        $sql_E->execute();
                        $data_E = $sql_E->fetch();
                        $sql_F = $conexion->prepare("SELECT count(*) as cuentaF FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'F'");
                        $sql_F->execute();
                        $data_F = $sql_F->fetch();
                        $sql_G = $conexion->prepare("SELECT count(*) as cuentaG FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'G'");
                        $sql_G->execute();
                        $data_G = $sql_G->fetch();
                        $sql_H = $conexion->prepare("SELECT count(*) as cuentaH FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'H'");
                        $sql_H->execute();
                        $data_H = $sql_H->fetch();
                        $sql_I = $conexion->prepare("SELECT count(*) as cuentaI FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'I'");
                        $sql_I->execute();
                        $data_I = $sql_I->fetch();
                        $sql_J = $conexion->prepare("SELECT count(*) as cuentaJ FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'J'");
                        $sql_J->execute();
                        $data_J = $sql_J->fetch();
                        $sql_K = $conexion->prepare("SELECT count(*) as cuentaK FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'K'");
                        $sql_K->execute();
                        $data_K = $sql_K->fetch();
                        $sql_L = $conexion->prepare("SELECT count(*) as cuentaL FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'L'");
                        $sql_L->execute();
                        $data_L = $sql_L->fetch();
                        $sql_M = $conexion->prepare("SELECT count(*) as cuentaM FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'M'");
                        $sql_M->execute();
                        $data_M = $sql_M->fetch();
                        $sql_N = $conexion->prepare("SELECT count(*) as cuentaN FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'N'");
                        $sql_N->execute();
                        $data_N = $sql_N->fetch();
                        $sql_O = $conexion->prepare("SELECT count(*) as cuentaO FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'O'");
                        $sql_O->execute();
                        $data_O = $sql_O->fetch();
                        $sql_P = $conexion->prepare("SELECT count(*) as cuentaP FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'P'");
                        $sql_P->execute();
                        $data_P = $sql_P->fetch();
                        $sql_Q = $conexion->prepare("SELECT count(*) as cuentaQ FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'Q'");
                        $sql_Q->execute();
                        $data_Q = $sql_Q->fetch();
                        $sql_R = $conexion->prepare("SELECT count(*) as cuentaR FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'R'");
                        $sql_R->execute();
                        $data_R = $sql_R->fetch();
                        $sql_S = $conexion->prepare("SELECT count(*) as cuentaS FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'S'");
                        $sql_S->execute();
                        $data_S = $sql_S->fetch();
                        $sql_T = $conexion->prepare("SELECT count(*) as cuentaT FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'T'");
                        $sql_T->execute();
                        $data_T = $sql_T->fetch();
                        $sql_U = $conexion->prepare("SELECT count(*) as cuentaU FROM empresas_2020 WHERE SUBSTR(ciiu_actividad1,1 ,1) = 'U'");
                        $sql_U->execute();
                        $data_U = $sql_U->fetch();
                        ?>['<?php echo 'A - Agricultura. Ganadería. Caza. Silvicultura Y Pesca'; ?>', <?php echo $data_A['cuentaA']; ?>],
                        ['<?php echo 'B - Explotación De Minas Y Canteras'; ?>', <?php echo $data_B['cuentaB']; ?>],
                        ['<?php echo 'C - Industrias Manufactureras'; ?>', <?php echo $data_C['cuentaC']; ?>],
                        ['<?php echo 'D - Suministro de electricidad. Gas. Vapor Y Aire Acondicionado'; ?>', <?php echo $data_D['cuentaD']; ?>],
                        ['<?php echo 'E - Distribución De Agua; Evacuación Y Tratamiento De Aguas Residuales. Gestión de Desechos Y Actividades De Saneamiento Ambiental'; ?>', <?php echo $data_E['cuentaE']; ?>],
                        ['<?php echo 'F - Construcción'; ?>', <?php echo $data_F['cuentaF']; ?>],
                        ['<?php echo 'G - Comercio Al Por Mayor Y Al Por Menor; Reparación De Vehículos Automotores Y Motocicletas'; ?>', <?php echo $data_G['cuentaG']; ?>],
                        ['<?php echo 'H - Transporte Y Almacenamiento'; ?>', <?php echo $data_H['cuentaH']; ?>],
                        ['<?php echo 'I - Alojamiento Y Servicios De Comida. '; ?>', <?php echo $data_I['cuentaI']; ?>],
                        ['<?php echo 'J - Información Y Comunicaciones'; ?>', <?php echo $data_J['cuentaJ']; ?>],
                        ['<?php echo 'K - Actividades Financieras Y De Seguros'; ?>', <?php echo $data_K['cuentaK']; ?>],
                        ['<?php echo 'L - Actividades Inmobiliarias'; ?>', <?php echo $data_L['cuentaL']; ?>],
                        ['<?php echo 'M - Actividades Profesionales. Científicas Y Técnicas'; ?>', <?php echo $data_M['cuentaM']; ?>],
                        ['<?php echo 'N - Actividades De Servicios Administrativos Y De Apoyo'; ?>', <?php echo $data_N['cuentaN']; ?>],
                        ['<?php echo 'O - Administración Publica Y Defensa; Planes De Seguridad Social De Afiliación Obligatoria'; ?>', <?php echo $data_O['cuentaO']; ?>],
                        ['<?php echo 'P - Educación'; ?>', <?php echo $data_P['cuentaP']; ?>],
                        ['<?php echo 'Q - Actividades De Atención De La Salud Humana Y De Asistencia Social'; ?>', <?php echo $data_Q['cuentaQ']; ?>],
                        ['<?php echo 'R - Actividades Artísticas. De Entretenimiento Y Recreación'; ?>', <?php echo $data_R['cuentaR']; ?>],
                        ['<?php echo 'S - Otras Actividades De Servicios'; ?>', <?php echo $data_S['cuentaS']; ?>],
                        ['<?php echo 'T - Actividades De Los Hogares Individuales En Calidad De Empleadores; Actividades No Diferenciadas De Los Hogares Individuales Como Productores De Bienes Y Servicios Para Uso Propio'; ?>', <?php echo $data_T['cuentaT']; ?>],
                        ['<?php echo 'U - Actividades De Organizaciones Y Entidades Extraterritoriales'; ?>', <?php echo $data_U['cuentaU']; ?>],
                    ]);

                    // Set chart options
                    var options = {
                        'title': 'Actividad economica General',
                        'is3D': false,
                        'width': 550,
                        'height': 350
                    };

                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div_actividad_general'));
                    chart.draw(data, options);
                }
            </script>
            <!--Div that will hold the pie chart-->
            <div id="chart_div_actividad_general"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile tile-border-top">
            <h4>Actividad economica Muestra</h4>
            <script type="text/javascript">
                // Load the Visualization API and the corechart package.
                google.charts.load('current', {
                    'packages': ['corechart']
                });

                // Set a callback to run when the Google Visualization API is loaded.
                google.charts.setOnLoadCallback(drawChart);

                // Callback that creates and populates a data table,
                // instantiates the pie chart, passes in the data and
                // draws it.
                function drawChart() {

                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                    <?php
                        $sql_A = $conexion->prepare("SELECT COUNT(*) as cuentaA FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'A'");
                        $sql_A->execute();
                        $data_A = $sql_A->fetch();
                        $sql_B = $conexion->prepare("SELECT COUNT(*) as cuentaB FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'B'");
                        $sql_B->execute();
                        $data_B = $sql_B->fetch();
                        $sql_C = $conexion->prepare("SELECT COUNT(*) as cuentaC FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'C'");
                        $sql_C->execute();
                        $data_C = $sql_C->fetch();
                        $sql_D = $conexion->prepare("SELECT COUNT(*) as cuentaD FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'A'");
                        $sql_D->execute();
                        $data_D = $sql_D->fetch();
                        $sql_E = $conexion->prepare("SELECT COUNT(*) as cuentaE FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'E'");
                        $sql_E->execute();
                        $data_E = $sql_E->fetch();
                        $sql_F = $conexion->prepare("SELECT COUNT(*) as cuentaF FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'F'");
                        $sql_F->execute();
                        $data_F = $sql_F->fetch();
                        $sql_G = $conexion->prepare("SELECT COUNT(*) as cuentaG FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'G'");
                        $sql_G->execute();
                        $data_G = $sql_G->fetch();
                        $sql_H = $conexion->prepare("SELECT COUNT(*) as cuentaH FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'H'");
                        $sql_H->execute();
                        $data_H = $sql_H->fetch();
                        $sql_I = $conexion->prepare("SELECT COUNT(*) as cuentaI FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'I'");
                        $sql_I->execute();
                        $data_I = $sql_I->fetch();
                        $sql_J = $conexion->prepare("SELECT COUNT(*) as cuentaJ FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'J'");
                        $sql_J->execute();
                        $data_J = $sql_J->fetch();
                        $sql_K = $conexion->prepare("SELECT COUNT(*) as cuentaK FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'K'");
                        $sql_K->execute();
                        $data_K = $sql_K->fetch();
                        $sql_L = $conexion->prepare("SELECT COUNT(*) as cuentaL FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'L'");
                        $sql_L->execute();
                        $data_L = $sql_L->fetch();
                        $sql_M = $conexion->prepare("SELECT COUNT(*) as cuentaM FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'M'");
                        $sql_M->execute();
                        $data_M = $sql_M->fetch();
                        $sql_N = $conexion->prepare("SELECT COUNT(*) as cuentaN FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'N'");
                        $sql_N->execute();
                        $data_N = $sql_N->fetch();
                        $sql_O = $conexion->prepare("SELECT COUNT(*) as cuentaO FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'O'");
                        $sql_O->execute();
                        $data_O = $sql_O->fetch();
                        $sql_P = $conexion->prepare("SELECT COUNT(*) as cuentaP FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'P'");
                        $sql_P->execute();
                        $data_P = $sql_P->fetch();
                        $sql_Q = $conexion->prepare("SELECT COUNT(*) as cuentaQ FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'Q'");
                        $sql_Q->execute();
                        $data_Q = $sql_Q->fetch();
                        $sql_R = $conexion->prepare("SELECT COUNT(*) as cuentaR FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'R'");
                        $sql_R->execute();
                        $data_R = $sql_R->fetch();
                        $sql_S = $conexion->prepare("SELECT COUNT(*) as cuentaS FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'S'");
                        $sql_S->execute();
                        $data_S = $sql_S->fetch();
                        $sql_T = $conexion->prepare("SELECT COUNT(*) as cuentaT FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'T'");
                        $sql_T->execute();
                        $data_T = $sql_T->fetch();
                        $sql_U = $conexion->prepare("SELECT COUNT(*) as cuentaU FROM muestra INNER JOIN empresas_2020 ON muestra.id_empresa = empresas_2020.Id WHERE SUBSTRING(ciiu_actividad1,1,1) = 'U'");
                        $sql_U->execute();
                        $data_U = $sql_U->fetch();
                        ?>['<?php echo 'A - Agricultura. Ganadería. Caza. Silvicultura Y Pesca'; ?>', <?php echo $data_A['cuentaA']; ?>],
                        ['<?php echo 'B - Explotación De Minas Y Canteras'; ?>', <?php echo $data_B['cuentaB']; ?>],
                        ['<?php echo 'C - Industrias Manufactureras'; ?>', <?php echo $data_C['cuentaC']; ?>],
                        ['<?php echo 'D - Suministro de electricidad. Gas. Vapor Y Aire Acondicionado'; ?>', <?php echo $data_D['cuentaD']; ?>],
                        ['<?php echo 'E - Distribución De Agua; Evacuación Y Tratamiento De Aguas Residuales. Gestión de Desechos Y Actividades De Saneamiento Ambiental'; ?>', <?php echo $data_E['cuentaE']; ?>],
                        ['<?php echo 'F - Construcción'; ?>', <?php echo $data_F['cuentaF']; ?>],
                        ['<?php echo 'G - Comercio Al Por Mayor Y Al Por Menor; Reparación De Vehículos Automotores Y Motocicletas'; ?>', <?php echo $data_G['cuentaG']; ?>],
                        ['<?php echo 'H - Transporte Y Almacenamiento'; ?>', <?php echo $data_H['cuentaH']; ?>],
                        ['<?php echo 'I - Alojamiento Y Servicios De Comida. '; ?>', <?php echo $data_I['cuentaI']; ?>],
                        ['<?php echo 'J - Información Y Comunicaciones'; ?>', <?php echo $data_J['cuentaJ']; ?>],
                        ['<?php echo 'K - Actividades Financieras Y De Seguros'; ?>', <?php echo $data_K['cuentaK']; ?>],
                        ['<?php echo 'L - Actividades Inmobiliarias'; ?>', <?php echo $data_L['cuentaL']; ?>],
                        ['<?php echo 'M - Actividades Profesionales. Científicas Y Técnicas'; ?>', <?php echo $data_M['cuentaM']; ?>],
                        ['<?php echo 'N - Actividades De Servicios Administrativos Y De Apoyo'; ?>', <?php echo $data_N['cuentaN']; ?>],
                        ['<?php echo 'O - Administración Publica Y Defensa; Planes De Seguridad Social De Afiliación Obligatoria'; ?>', <?php echo $data_O['cuentaO']; ?>],
                        ['<?php echo 'P - Educación'; ?>', <?php echo $data_P['cuentaP']; ?>],
                        ['<?php echo 'Q - Actividades De Atención De La Salud Humana Y De Asistencia Social'; ?>', <?php echo $data_Q['cuentaQ']; ?>],
                        ['<?php echo 'R - Actividades Artísticas. De Entretenimiento Y Recreación'; ?>', <?php echo $data_R['cuentaR']; ?>],
                        ['<?php echo 'S - Otras Actividades De Servicios'; ?>', <?php echo $data_S['cuentaS']; ?>],
                        ['<?php echo 'T - Actividades De Los Hogares Individuales En Calidad De Empleadores; Actividades No Diferenciadas De Los Hogares Individuales Como Productores De Bienes Y Servicios Para Uso Propio'; ?>', <?php echo $data_T['cuentaT']; ?>],
                        ['<?php echo 'U - Actividades De Organizaciones Y Entidades Extraterritoriales'; ?>', <?php echo $data_U['cuentaU']; ?>],
                    ]);

                    // Set chart options
                    var options = {
                        'title': 'Actividad economica Muestra',
                        'is3D': false,
                        'width': 550,
                        'height': 350
                    };

                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div_actividad_muestra'));
                    chart.draw(data, options);
                }
            </script>
            <!--Div that will hold the pie chart-->
            <div id="chart_div_actividad_muestra"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="tile tile-border-top">
            <?php $sql_a = $conexion->prepare("SELECT * FROM persona WHERE rol = 'Aprendiz'");
            $sql_a->execute();
            $resultado_a = $sql_a->rowCount(); ?>
            <?php $sql_i = $conexion->prepare("SELECT * FROM persona WHERE rol = 'Instructor'");
            $sql_i->execute();
            $resultado_i = $sql_i->rowCount(); ?>
            <h4>Aprendices e Instructores</h4>
            <script type="text/javascript">
                // Load the Visualization API and the corechart package.
                google.charts.load('current', {
                    'packages': ['corechart']
                });

                // Set a callback to run when the Google Visualization API is loaded.
                google.charts.setOnLoadCallback(drawChart);

                // Callback that creates and populates a data table,
                // instantiates the pie chart, passes in the data and
                // draws it.
                function drawChart() {

                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                        ['Aprendices', <?php echo $resultado_a; ?>],
                        ['Instrucores', <?php echo $resultado_i; ?>],
                    ]);

                    // Set chart options
                    var options = {
                        'title': 'Cantidad de aprendices e instructores',
                        'is3D': false,
                        'width': 550,
                        'height': 350
                    };

                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                }
            </script>
            <!--Div that will hold the pie chart-->
            <div id="chart_div"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile tile-border-top">
            <h4>Tituladas vinculadas</h4>
            <script type="text/javascript">
                // Load the Visualization API and the corechart package.
                google.charts.load('current', {
                    'packages': ['corechart']
                });

                // Set a callback to run when the Google Visualization API is loaded.
                google.charts.setOnLoadCallback(drawChart);

                // Callback that creates and populates a data table,
                // instantiates the pie chart, passes in the data and
                // draws it.
                function drawChart() {

                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                        <?php
                        $sql_ccc = $conexion->prepare("SELECT programa, count(*) as cuenta FROM persona GROUP BY programa");
                        $sql_ccc->execute();
                        $data_ccc = $sql_ccc->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($data_ccc as $ccc) :
                        ?>['<?php echo $ccc['programa']; ?>', <?php echo $ccc['cuenta']; ?>],
                        <?php endforeach; ?>
                    ]);

                    // Set chart options
                    var options = {
                        'title': 'Programas vinculados',
                        'is3D': false,
                        'width': 550,
                        'height': 350
                    };

                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div5'));
                    chart.draw(data, options);
                }
            </script>
            <!--Div that will hold the pie chart-->
            <div id="chart_div5"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="tile tile-border-top">
            <h4>Tipo Organización General</h4>
            <script type="text/javascript">
                // Load the Visualization API and the corechart package.
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                // Set a callback to run when the Google Visualization API is loaded.
                google.charts.setOnLoadCallback(drawChart);
                // Callback that creates and populates a data table,
                // instantiates the pie chart, passes in the data and
                // draws it.
                function drawChart() {
                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                        <?php
                        $sql_ccc = $conexion->prepare("SELECT nombre_tipo_ccc, COUNT(*) AS organizacionGeneral FROM empresas_2020 
                        INNER JOIN tipo_empresa_cc ON empresas_2020.organizacion = tipo_empresa_cc.id_tipo_cc 
                        GROUP BY nombre_tipo_ccc");
                        $sql_ccc->execute();
                        $data_ccc = $sql_ccc->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($data_ccc as $ccc) : ?>
                        ['<?php echo $ccc['nombre_tipo_ccc'] ?>',<?php echo $ccc['organizacionGeneral']; ?>],
                        <?php endforeach; ?>
                    ]);
                    // Set chart options
                    var options = {
                        'title': 'Tipo organización (General)',
                        'is3D': false,
                        'width': 550,
                        'height': 350
                    };
                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div_tipo_general'));
                    chart.draw(data, options);
                }
            </script>
            <!--Div that will hold the pie chart-->
            <div id="chart_div_tipo_general"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile tile-border-top">
            <h4>Tipo organización MUESTRA</h4>
            <script type="text/javascript">
                // Load the Visualization API and the corechart package.
                google.charts.load('current', {
                    'packages': ['corechart']
                });

                // Set a callback to run when the Google Visualization API is loaded.
                google.charts.setOnLoadCallback(drawChart);

                // Callback that creates and populates a data table,
                // instantiates the pie chart, passes in the data and
                // draws it.
                function drawChart() {

                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                        <?php
                        $sql_ccc = $conexion->prepare("SELECT nombre_tipo_ccc, COUNT(*) AS cuentaOrganizacion FROM muestra 
                        INNER JOIN empresas_2020 ON muestra.id_empresa=empresas_2020.Id
                        INNER JOIN tipo_empresa_cc ON empresas_2020.organizacion = tipo_empresa_cc.id_tipo_cc 
                        GROUP BY nombre_tipo_ccc");
                        $sql_ccc->execute();
                        $data_ccc = $sql_ccc->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($data_ccc as $ccc) :?>
                        ['<?php echo $ccc['nombre_tipo_ccc']; ?>',<?php echo $ccc['cuentaOrganizacion']; ?>],
                        <?php endforeach; ?>
                    ]);

                    // Set chart options
                    var options = {
                        'title': 'Tipo organización (Muestra)',
                        'is3D': false,
                        'width': 550,
                        'height': 350
                    };

                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.PieChart(document.getElementById('organizacion_grafico_muestra'));
                    chart.draw(data, options);
                }
            </script>
            <!--Div that will hold the pie chart-->
            <div id="organizacion_grafico_muestra"></div>
        </div>
    </div>
</div>

