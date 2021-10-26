<?php

/*preguntas*/


$consultaRespuesta = $conexion->prepare("SELECT * FROM respuestas WHERE nit_empresa = '$nitEmpresa'");
$consultaRespuesta->execute();
$dataRespuesta = $consultaRespuesta->fetch(PDO::FETCH_ASSOC);
?>

<div class="card">
    <div class="card-header">Perspectiva de Crecimiento y Desarrollo</div>
    <div class="card-body">
        <p>
          1). ¿Realizo procesos de capacitación durante el año 2020? <br>
          <?php echo $dataRespuesta['pre1_pcd']; ?>
        </p>
        <p>
          1.1). Si su respuesta a la anterior pregunta fue POSITIVA en que área? Por lo contrario si su respuesta fue NO, omita está pregunta. <br>
          <?php echo $dataRespuesta['pre1.1_pcd']; ?>
        </p>
        <p>
          2). ¿En el año 2020 como consecuencia del covid-19, sus empleados realizaron trabajo en casa? <br>
          <?php echo $dataRespuesta['pre2_pcd']; ?>
        </p>
        <p>
          3). Evalúe de 1 a 5 siendo 1 el menor ajuste realizado y 5 el mayor ajuste realizado. <br>
          <b> ¿Durante el primer año de convivencia con el Covid-19 (año 2020), qué tipo de reformas debió realizar la empresa para ajustarse a los cambios generados por la pandemia? </b> <br>
          <?php echo $dataRespuesta['pre3.1_pcd']; ?> |
          <?php echo $dataRespuesta['pre3.2_pcd']; ?> |
          <?php echo $dataRespuesta['pre3.3_pcd']; ?> |
          <?php echo $dataRespuesta['pre3.4_pcd']; ?> |
          <?php echo $dataRespuesta['pre3.5_pcd']; ?> |
        </p>
        <p>
          4). De acuerdo a las reformas que debió realizar la empresa para ajustarse a los cambios generados por el Covid-19 durante el primer año, marque con una X sobre la reforma en la que haya generado más impacto sobre las ventas y/o empleo <br>
          <?php echo $dataRespuesta['pre4.1_pcd']; ?> |
          <?php echo $dataRespuesta['pre4.2_pcd']; ?> |
          <?php echo $dataRespuesta['pre4.3_pcd']; ?> |
          <?php echo $dataRespuesta['pre4.4_pcd']; ?> |
          <?php echo $dataRespuesta['pre4.5_pcd']; ?> |
        </p>
        <p>
          5). Durante el Primer año de convivencia con el Covid–19, usted se vio en la necesidad de prescindir de los servicios de algún colaborador? <br>
          <?php echo $dataRespuesta['pre5_pcd']; ?>
        </p>
        <p>
          5.1). Si su respuesta anterior fue SI, señale ¿Cuantos? <br>
          <?php echo $dataRespuesta['pre5.1_pcd']; ?>
        </p>
        <p>
          6). ¿Cuál ha sido el tipo de reinvención ó innovación realizada en su empresa para enfrentar los efectos de la pandemia tras el primer año de convivencia con el Covid-19?<br>
          <?php echo $dataRespuesta['pre6_pcd']; ?>
        </p>
        <p>
          7). Durante el primer año de convivencia con el COVID-19 su empresa presento un <br>
          <?php echo $dataRespuesta['pre7_pcd']; ?>
        </p>
        <p>
          8). Evalúe de 1 a 5, siendo 1 menos importante y 5 más importante, con relación a los principales factores que usted considera que le han afectado   a su actividad productiva, durante el primer año de convivencia con el Covid-19. <br>
          <?php echo $dataRespuesta['pre8.1_pcd']; ?> |
          <?php echo $dataRespuesta['pre8.2_pcd']; ?> |
          <?php echo $dataRespuesta['pre8.3_pcd']; ?> |
          <?php echo $dataRespuesta['pre8.4_pcd']; ?> |
          <?php echo $dataRespuesta['pre8.5_pcd']; ?> |
          <?php echo $dataRespuesta['pre8.6_pcd']; ?> |
          <?php echo $dataRespuesta['pre8.7_pcd']; ?> |
          <?php echo $dataRespuesta['pre8.8_pcd']; ?> |
        </p>
        <p>
          9). De acuerdo a la situación actual vivida y transcurrido el primer año de convivencia con la pandemia del  covid-19 ¿Cómo califica usted la gestión  del gobierno nacional, departamental y local  para atender las necesidades apremiantes de la microempresa Casanareña? <br>
          <?php echo $dataRespuesta['pre9.1_pcd']; ?> |
          <?php echo $dataRespuesta['pre9.2_pcd']; ?> |
          <?php echo $dataRespuesta['pre9.3_pcd']; ?> |
        </p>
        <p>
          9.1). Dé, el por qué su calificación en la pregunta anterior. <br>
          <?php echo $dataRespuesta['pre9.4_pcd']; ?>
        </p>
        <p>
          10). De acuerdo a la situación actual vivida y transcurrido el primer año de convivencia con la pandemia del  covid-19 ¿Cómo califica usted la gestión  de las diferentes entidades para atender las necesidades apremiantes de la microempresa Casanareña? <br>
          <?php echo $dataRespuesta['pre10.1_pcd']; ?> |
          <?php echo $dataRespuesta['pre10.2_pcd']; ?> |
          <?php echo $dataRespuesta['pre10.3_pcd']; ?> |
          <?php echo $dataRespuesta['pre10.4_pcd']; ?> |
          <?php echo $dataRespuesta['pre10.5_pcd']; ?> |
        </p>
        <p>
          10.1). Dé, el por qué su calificación en la pregunta anterior. <br>
          <?php echo $dataRespuesta['pre10.6_pcd']; ?>
        </p>
        <p>
          11). ¿Evalúe de 1 a 5, siendo 1 la dificultad menos importante y 5 la dificultad más importante, que ha presentado en su empresa a raíz de los efectos del primer año de convivencia con el COVID -19? <br>
          <?php echo $dataRespuesta['pre11.1_pcd']; ?> |
          <?php echo $dataRespuesta['pre11.2_pcd']; ?> |
          <?php echo $dataRespuesta['pre11.3_pcd']; ?> |
          <?php echo $dataRespuesta['pre11.4_pcd']; ?> |
        </p>
        <p>
          12). ¿Cuál ha sido la modalidad de trabajo más adoptada por su empresa, transcurrido el primer año de convivencia con la pandemia covid-19? <br>
          <?php echo $dataRespuesta['pre12_pcd']; ?>
        </p>
        <p>
          13). Desde su punto de vista, el trabajo en casa este ha generado en el grupo de colaboradores de su empresa <br>
          <?php echo $dataRespuesta['pre13_pcd']; ?>
        </p>
        <p>
          14). ¿Su microempresa ha dado algún tipo de compensación, por los recursos utilizados por el trabajador que se encuentra realizando teletrabajo? <br>
          <?php echo $dataRespuesta['pre14_pcd']; ?>
        </p>
        <p>
          15). ¿En que ha estado representada esta compensación? <br>
          <?php echo $dataRespuesta['pre15_pcd']; ?>
        </p>
        <p>
          16). Con respecto a su estilo de dirección de su microempresa,  ¿qué competencias y habilidades más importantes  ha debido implementar durante el primer año de contingencia por el Covid-19? Evalúe de 1 a 5, siendo 1 la menos importante y 5 la más importante. <br>
          <?php echo $dataRespuesta['pre16.1_pcd']; ?> |
          <?php echo $dataRespuesta['pre16.2_pcd']; ?> |
          <?php echo $dataRespuesta['pre16.3_pcd']; ?> |
          <?php echo $dataRespuesta['pre16.4_pcd']; ?> |
        </p>
        <p>
          17.1). ¿Tiene elaborado el modelo de negocio para su microempresa?, (entiéndase modelo de negocio, como una herramienta de análisis que le permite saber cuál es su propuesta de valor o de utilidad, que ofrece al cliente a través de su producto o servicio, a qué costos, con qué medios y qué fuentes de ingresos va a tener) <br>
          <?php echo $dataRespuesta['pre17.1_pcd']; ?>
        </p>
        <p>
          17.2). ¿Si contestó a la anterior pregunta SI, tuvo que ajustar su modelo de negocio durante el primer año de convivencia con el Covid-19 ? <br>
          <?php echo $dataRespuesta['pre17.2_pcd']; ?>
        </p>
    </div>
</div>
<div class="card mt-3">
  <div class="card-header">Perspectiva de clientes</div>
  <div class="card-body">
    <p>
      1). Considera que el mejoramiento del servicio y atención al cliente a representado para su microempresa un factor de <br>
      <?php echo $dataRespuesta['pre1_pc']; ?>
    </p>
    <p>
      2). ¿Que tan efectivas considera las siguientes estratégias para recuperar y/o mantener los clientes de su microempresa durante primer año de convivencia con el Covid -19, ? Evalúe de 1 a 5, siendo 1 la de menor importancia y 5 la de mayor importancia. <br>
      <?php echo $dataRespuesta['pre2.1_pc']; ?> |
      <?php echo $dataRespuesta['pre2.2_pc']; ?> |
      <?php echo $dataRespuesta['pre2.3_pc']; ?> |
      <?php echo $dataRespuesta['pre2.4_pc']; ?> |
      <?php echo $dataRespuesta['pre2.5_pc']; ?> |
    </p>
    <p>
      3). ¿Considera que la adopción de los protocolos de bioseguridad durante el primer año de convivencia con el Covid-19, generaron confianza en los clientes , provocando un aumento en las ventas? <br>
      <?php echo $dataRespuesta['pre3_pc']; ?>
    </p>
    <p>
      4). ¿Realiza usted alguna  innovación para lograr una mejor la satisfacción al cliente ? <br>
      <?php echo $dataRespuesta['pre4.1_pc']; ?>
    </p>
    <p>
      4.1). Si su respuesta a la anterior pregunta fue SI, mencione que innovación ha realizado para lograr mejorar la satisfacción del cliente. <br>
      <?php echo $dataRespuesta['pre4.2_pc']; ?>
    </p>
    <p>
      5). ¿En qué porcentaje ha crecido el número de clientes de su negocio durante el  primer año de convivencia con el Covid-19? <br>
      <?php echo $dataRespuesta['pre5_pc']; ?>
    </p>
    <p>
      6). ¿Qué porcentaje de los gastos totales de su negocio a direccionado para captar nuevos clientes durante el primer año de convivencia con el Covid-19? <br>
      <?php echo  $dataRespuesta['pre6_pc']; ?>
    </p>
    <p>
      7). ¿Califique de 1 a 5, siendo 1 donde no ha habido quejas y 5 la opción que más quejas ha recibido, en relación con los aspectos que se enumeran a continuación durante el primer año de convivencia por el Covid-19? <br>
      <?php echo $dataRespuesta['pre7.1_pc']; ?> |
      <?php echo $dataRespuesta['pre7.2_pc']; ?> |
      <?php echo $dataRespuesta['pre7.3_pc']; ?> |
      <?php echo $dataRespuesta['pre7.4_pc']; ?> |
      <?php echo $dataRespuesta['pre7.5_pc']; ?> |
      <?php echo $dataRespuesta['pre7.6_pc']; ?> |
    </p>
    <p>
      8). ¿Considera importante dar respuesta al buzón de sugerencias oportunamente? <br>
      <?php echo $dataRespuesta['pre8_pc']; ?>
    </p>
    <p>
      9). ¿Qué estrategia de medición del nivel satisfacción del cliente o PQRs ha implementado en su microempresa? <br>
      <?php echo $dataRespuesta['pre9_pc']; ?>
    </p>
    <p>

    </p>
  </div>
</div>
<div class="card mt-3">
  <div class="card-header">Perspectiva de Procesos Internos</div>
  <div class="card-body">
    <p>
      1). ¿Su empresa tiene identificados claramente sus procesos internos? <br>
      <?php echo $dataRespuesta['pre1_pi']; ?>
    </p>
    <p>
      2). ¿La empresa tiene documentados sus procesos internos? <br>
      <?php echo $dataRespuesta['pre2_pi']; ?>
    </p>
    <p>
      3.1). ¿La empresa cuenta con alguna certificación reglamentaria para su sector? <br>
      <?php echo $dataRespuesta['pre3.1_pi']; ?>
    </p>
    <p>
      3.2). Si su respuesta a la anterior pregunta fue SI, mencione ¿Cual? <br>
      <?php echo $dataRespuesta['pre3.2_pi']; ?>
    </p>
    <p>
      4.1). ¿La empresa cuenta con alguna certificación de Calidad? <br>
      <?php echo $dataRespuesta['pre4.1_pi']; ?>
    </p>
    <p>
      4.2). Si su respuesta a la anterior pregunta fue SI, mencione ¿Cual? <br>
      <?php echo $dataRespuesta['pre4.2_pi']; ?>
    </p>
    <p>
      5). ¿Con relación al grado de afectación de sus procesos internos durante el primer año de convivencia con el Covid -19? Evalúe del 1 al 5, siendo 1 el menor nivel y 5 el mayor nivel de afectación. <br>
      <?php echo $dataRespuesta['pre5.1_pi']; ?> |
      <?php echo $dataRespuesta['pre5.2_pi']; ?> |
      <?php echo $dataRespuesta['pre5.3_pi']; ?> |
      <?php echo $dataRespuesta['pre5.4_pi']; ?> |
      <?php echo $dataRespuesta['pre5.5_pi']; ?> |
      <?php echo $dataRespuesta['pre5.6_pi']; ?> |
      <?php echo $dataRespuesta['pre5.7_pi']; ?> |
    </p>
    <p>
      6.1). ¿Cuáles han sido los cambios más importantes que ha tenido con sus proveedores durante el primer año de convivencia con el Covid-19? <br>
      <?php echo $dataRespuesta['pre6.1_pi']; ?>
    </p>
    <p>
      6.2). Si su selección a la pregunta anterior fue CAMBIOS EN LOS MEDIOS DE PAGO, INDIQUE CUALES <br>
      <?php echo $dataRespuesta['pre6.2_pi']; ?>
    </p>
    <p>
      7). ¿Identifique cuáles han sido los cambios más importantes que ha tenido con sus clientes durante el primer año de convivencia con el Covid-19? <br>
      <?php echo $dataRespuesta['pre7_pi']; ?>
    </p>
    <p>
      8). Considera que el grado de rentabilidad de los nuevos productos lanzados al mercado durante el primer año de convivencia con el Covid-19 ha sido <br>
      <?php echo $dataRespuesta['pre8_pi']; ?>
    </p>
  </div>
</div>
<div class="card mt-3">
  <div class="card-header">Perspectiva Financiera</div>
  <div class="card-body">
    <p>
      1). ¿La empresa se sujetó al subsidio de Nómina (PAEF) decretado por el Gobierno Nacional? <br>
      <?php echo $dataRespuesta['pre1_pf']; ?>
    </p>
    <p>
      1.1). Si contestó No a la anterior pregunta marque alguna(s) de las siguientes razones <br>
      <?php echo $dataRespuesta['pre1.1_pf']; ?>
    </p>
    <p>
      2). ¿Recibió algún beneficio de las entidades financieras como empresario a raíz de la contingencia por el Covid–19? <br>
      <?php echo $dataRespuesta['pre2_pf']; ?>
    </p>
    <p>
      2.1). Si su respuesta a la anterior pregunta fue SI, mencione ¿Cual? <br>
      <?php echo $dataRespuesta['pre2.1_pf']; ?>
    </p>
    <p>
      3). ¿Realizó reliquidaciones de sus obligaciones financieras originadas principalmente por la pandemia? <br>
      <?php echo $dataRespuesta['pre3.1_pf']; ?>
    </p>
    <p>
      3.1). Si respondió SI a la anterior pregunta, ¿ésta reliquidación de las obligaciones financieras le permitió generar flujo de caja mejorando la situación de su empresa? <br>
      <?php echo $dataRespuesta['pre3.2_pf']; ?>
    </p>
    <p>
      4). Su empresa lleva Contabilidad de <br>
      <?php echo $dataRespuesta['pre4_pf']; ?>
    </p>
    <p>
      5). ¿La facturación relacionada con esta área Contable es generada y archivada adecuadamente? <br>
      <?php echo $dataRespuesta['pre5_pf']; ?>
    </p>
    <p>
      6). ¿La empresa realiza control mensual de sus costos y gastos? <br>
      <?php echo $dataRespuesta['pre6_pf']; ?>
    </p>
    <p>
      7). ¿Cuál ha sido el nivel de afectación de sus costos y gastos durante el primer año de convivencia con el Covid-19? <br>
      <?php echo $dataRespuesta['pre7_pf']; ?>
    </p>
    <p>
      8). ¿Realiza una planificación presupuestal de sus ingresos y egresos? <br>
      <?php echo $dataRespuesta['pre8_pf']; ?>
    </p>
    <p>
      9). ¿Tiene usted conocimiento de que son los Indicadores financieros? <br>
      <?php echo $dataRespuesta['pre9.1_pf']; ?>
    </p>
    <p>
      9.1). Si respondió SI a la anterior pregunta, su empresa tiene definidos e interpreta los indicadores financieros? <br>
      <?php echo $dataRespuesta['pre9.2_pf']; ?>
    </p>
    <p>
      10). ¿Le fueron aprobados préstamos de la banca comercial durante la pandemia? <br>
      <?php echo $dataRespuesta['pre10.1_pf']; ?>
    </p>
    <p>
      10.1). Si respondió Sí a la anterior pregunta ¿Mencione qué montos? <br>
      <?php echo $dataRespuesta['pre10.2_pf']; ?>
    </p>
    <p>
      11). ¿Cómo ha financiado sus actividades a lo largo de la pandemia del Covid-19? <br>
      <?php echo $dataRespuesta['pre11_pf']; ?>
    </p>
    <p>
      12). La liquidez o la disponibilidad de efectivo de su empresa durante el primer año de convivencia con la pandemia por el Covid-19 ha sido <br>
      <?php echo $dataRespuesta['pre12_pf']; ?>
    </p>
    <p>
      13). Considera que las ganancias de su negocio durante el primer año de covid-19 en comparación al año anterior <br>
      <?php echo $dataRespuesta['pre13_pf']; ?>
    </p>
    <p>
      14). Reconoce que la pérdida de sus ganancias en el primer año del covid-19 obedeció principalmente a <br>
      <?php echo $dataRespuesta['pre14_pf']; ?>
    </p>
    <p>
      15). ¿Durante la pandemia los ingresos que ha recibido su negocio o empresa le han permitido sostenerse económicamente? <br>
      <?php echo $dataRespuesta['pre15_pf']; ?>
    </p>
  </div>
</div>
