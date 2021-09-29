<?php

/*preguntas*/


$consultaRespuesta = $conexion->prepare("SELECT * FROM respuestas WHERE nit_empresa = '$nitEmpresa'");
$consultaRespuesta->execute();
$dataRespuesta = $consultaRespuesta->fetch(PDO::FETCH_ASSOC);
?>

<table class="table table-hover table-striped">
    <td style="font-size: 20px;font-weight: bold;">Perspectiva de Crecimiento y Desarrollo</td>
    <tr>
        <th>¿Realizo procesos de capacitación durante el año 2020?</th>
        <td><?php echo $dataRespuesta['pre1_pcd']; ?></td>
    </tr>
    <tr>
        <th>Si su respuesta a la anterior pregunta fue POSITIVA en que área? Por lo contrario si su respuesta fue NO, omita está pregunta.</th>
        <td><?php echo $dataRespuesta['pre1.1_pcd']; ?></td>
    </tr>
    <tr>
        <th>¿En el año 2020 como consecuencia del covid-19, sus empleados realizaron trabajo en casa?</th>
        <td><?php echo $dataRespuesta['pre2_pcd']; ?></td>
    </tr>
    <td>Evalúe de 1 a 5 siendo 1 el menor ajuste realizado y 5 el mayor ajuste realizado.</td>
    <tr>
        <th>¿Durante el primer año de convivencia con el Covid-19 (año 2020), qué tipo de reformas debió realizar la empresa para ajustarse a los cambios generados por la pandemia? </th>
        <td><?php echo $dataRespuesta['pre3.1_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre3.2_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre3.3_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre3.4_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre3.5_pcd']; ?></td>
    </tr>
    <tr>
        <th>De acuerdo a las reformas que debió realizar la empresa para ajustarse a los cambios generados por el Covid-19 durante el primer año, marque con una X sobre la reforma en la que haya generado más impacto sobre las ventas y/o empleo</th>
        <td><?php echo $dataRespuesta['pre4.1_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre4.2_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre4.3_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre4.4_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre4.5_pcd']; ?></td>
    </tr>
    <tr>
        <th>Durante el Primer año de convivencia con el Covid–19, usted se vio en la necesidad de prescindir de los servicios de algún colaborador?</th>
        <td><?php echo $dataRespuesta['pre5_pcd']; ?></td>
    </tr>
    <tr>
        <th>Si su respuesta anterior fue SI, señale ¿Cuantos?</th>
        <td><?php echo $dataRespuesta['pre5.1_pcd']; ?></td>
    </tr>
    <tr>
        <th>¿Cuál ha sido el tipo de reinvención ó innovación realizada en su empresa para enfrentar los efectos de la pandemia tras el primer año de convivencia con el Covid-19?</th>
        <td><?php echo $dataRespuesta['pre6_pcd']; ?></td>
    </tr>
    <tr>
        <th>Durante el primer año de convivencia con el COVID-19 su empresa presento un</th>
        <td><?php echo $dataRespuesta['pre7_pcd']; ?></td>
    </tr>
    <tr>
        <th>Evalúe de 1 a 5, siendo 1 menos importante y 5 más importante, con relación a los principales factores que usted considera que le han afectado   a su actividad productiva, durante el primer año de convivencia con el Covid-19.</th>
        <td><?php echo $dataRespuesta['pre8.1_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre8.2_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre8.3_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre8.4_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre8.5_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre8.6_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre8.7_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre8.8_pcd']; ?></td>
    </tr>
    <tr>
        <th>De acuerdo a la situación actual vivida y transcurrido el primer año de convivencia con la pandemia del  covid-19 ¿Cómo califica usted la gestión  del gobierno nacional, departamental y local  para atender las necesidades apremiantes de la microempresa Casanareña?</th>
        <td><?php echo $dataRespuesta['pre9.1_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre9.2_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre9.3_pcd']; ?></td>
    </tr>
    <tr>
        <th>Dé, el por qué su calificación en la pregunta anterior.</th>
        <td><?php echo $dataRespuesta['pre9.4_pcd']; ?></td>
    </tr>
    <tr>
        <th>De acuerdo a la situación actual vivida y transcurrido el primer año de convivencia con la pandemia del  covid-19 ¿Cómo califica usted la gestión  de las diferentes entidades para atender las necesidades apremiantes de la microempresa Casanareña?</th>
        <td><?php echo $dataRespuesta['pre10.1_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre10.2_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre10.3_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre10.4_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre10.5_pcd']; ?></td>
    </tr>
    <tr>
        <th>Dé, el por qué su calificación en la pregunta anterior.</th>
        <td><?php echo $dataRespuesta['pre10.6_pcd']; ?></td>
    </tr>
    <tr>
        <th>¿Evalúe de 1 a 5, siendo 1 la dificultad menos importante y 5 la dificultad más importante, que ha presentado en su empresa a raíz de los efectos del primer año de convivencia con el COVID -19?</th>
        <td><?php echo $dataRespuesta['pre11.1_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre11.2_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre11.3_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre11.4_pcd']; ?></td>
    </tr>
    <tr>
        <th>¿Cuál ha sido la modalidad de trabajo más adoptada por su empresa, transcurrido el primer año de convivencia con la pandemia covid-19?</th>
        <td><?php echo $dataRespuesta['pre12_pcd']; ?></td>
    </tr>
    <tr>
        <th>Desde su punto de vista, el trabajo en casa este ha generado en el grupo de colaboradores de su empresa</th>
        <td><?php echo $dataRespuesta['pre13_pcd']; ?></td>
    </tr>
    <tr>
        <th>¿Su microempresa ha dado algún tipo de compensación, por los recursos utilizados por el trabajador que se encuentra realizando teletrabajo?</th>
        <td><?php echo $dataRespuesta['pre14_pcd']; ?></td>
    </tr>
    <tr>
        <th>¿En que ha estado representada esta compensación?</th>
        <td><?php echo $dataRespuesta['pre15_pcd']; ?></td>
    </tr>
    <tr>
        <th>Con respecto a su estilo de dirección de su microempresa,  ¿qué competencias y habilidades más importantes  ha debido implementar durante el primer año de contingencia por el Covid-19? Evalúe de 1 a 5, siendo 1 la menos importante y 5 la más importante. </th>
        <td><?php echo $dataRespuesta['pre16.1_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre16.2_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre16.3_pcd']; ?></td>
        <td><?php echo $dataRespuesta['pre16.4_pcd']; ?></td>
    </tr>
    <tr>
        <th>¿Tiene elaborado el modelo de negocio para su microempresa?, (entiéndase modelo de negocio, como una herramienta de análisis que le permite saber cuál es su propuesta de valor o de utilidad, que ofrece al cliente a través de su producto o servicio, a qué costos, con qué medios y qué fuentes de ingresos va a tener)  </th>
        <td><?php echo $dataRespuesta['pre17.1_pcd']; ?></td>
    </tr>
    <tr>
        <th>¿Si contestó a la anterior pregunta SI, tuvo que ajustar su modelo de negocio durante el primer año de convivencia con el Covid-19 ? </th>
        <td><?php echo $dataRespuesta['pre17.2_pcd']; ?></td>
    </tr>
    <td style="font-size: 20px;font-weight: bold;">PERSPECTIVA CLIENTES</td>
    <tr>
        <th>Considera que el mejoramiento del servicio y atención al cliente a representado para su microempresa un factor de</th>
        <td><?php echo $dataRespuesta['pre1_pc']; ?></td>
    </tr>
    <tr>
        <th>¿Que tan efectivas considera las siguientes estratégias para recuperar y/o mantener los clientes de su microempresa durante primer año de convivencia con el Covid -19, ? Evalúe de 1 a 5, siendo 1 la de menor importancia y 5 la de mayor importancia.</th>
        <td><?php echo $dataRespuesta['pre2.1_pc']; ?></td>
        <td><?php echo $dataRespuesta['pre2.2_pc']; ?></td>
        <td><?php echo $dataRespuesta['pre2.3_pc']; ?></td>
        <td><?php echo $dataRespuesta['pre2.4_pc']; ?></td>
        <td><?php echo $dataRespuesta['pre2.5_pc']; ?></td>
    </tr>
    <tr>
        <th>¿Considera que la adopción de los protocolos de bioseguridad durante el primer año de convivencia con el Covid-19, generaron confianza en los clientes , provocando un aumento en las ventas?</th>
        <td><?php echo $dataRespuesta['pre3_pc']; ?></td>
    </tr>
    <tr>
        <th>¿Realiza usted alguna  innovación para lograr una mejor la satisfacción al cliente ?</th>
        <td><?php echo $dataRespuesta['pre4.1_pc']; ?></td>
    </tr>
    <tr>
        <th>Si su respuesta a la anterior pregunta fue SI, mencione que innovación ha realizado para lograr mejorar la satisfacción del cliente.</th>
        <td><?php echo $dataRespuesta['pre4.2_pc']; ?></td>
    </tr>
    <tr>
        <th>¿En qué porcentaje ha crecido el número de clientes de su negocio durante el  primer año de convivencia con el Covid-19?</th>
        <td><?php echo $dataRespuesta['pre5_pc']; ?></td>
    </tr>
    <tr>
        <th>¿Qué porcentaje de los gastos totales de su negocio a direccionado para captar nuevos clientes durante el primer año de convivencia con el Covid-19?</th>
        <td><?php echo $dataRespuesta['pre6_pc']; ?></td>
    </tr>
    <tr>
        <th>¿Califique de 1 a 5, siendo 1 donde no ha habido quejas y 5 la opción que más quejas ha recibido, en relación con los aspectos que se enumeran a continuación durante el primer año de convivencia por el Covid-19?</th>
        <td><?php echo $dataRespuesta['pre7.1_pc']; ?></td>
        <td><?php echo $dataRespuesta['pre7.2_pc']; ?></td>
        <td><?php echo $dataRespuesta['pre7.3_pc']; ?></td>
        <td><?php echo $dataRespuesta['pre7.4_pc']; ?></td>
        <td><?php echo $dataRespuesta['pre7.5_pc']; ?></td>
        <td><?php echo $dataRespuesta['pre7.6_pc']; ?></td>
    </tr>
    <tr>
        <th>¿Considera importante dar respuesta al buzón de sugerencias oportunamente?</th>
        <td><?php echo $dataRespuesta['pre8_pc']; ?></td>
    </tr>
    <tr>
        <th>¿Qué estrategia de medición del nivel satisfacción del cliente o PQRs ha implementado en su microempresa?</th>
        <td><?php echo $dataRespuesta['pre9_pc']; ?></td>
    </tr>
    <td style="font-size: 20px;font-weight: bold;">Perspectiva de Procesos Internos</td>
    <tr>
        <th>¿Su empresa tiene identificados claramente sus procesos internos?</th>
        <td><?php echo $dataRespuesta['pre1_pi']; ?></td>
    </tr>
    <tr>
        <th>¿La empresa tiene documentados sus procesos internos?</th>
        <td><?php echo $dataRespuesta['pre2_pi']; ?></td>
    </tr>
    <tr>
        <th>¿La empresa cuenta con alguna certificación reglamentaria para su sector?</th>
        <td><?php echo $dataRespuesta['pre3.1_pi']; ?></td>
    </tr>
    <tr>
        <th>Si su respuesta a la anterior pregunta fue SI, mencione ¿Cual?</th>
        <td><?php echo $dataRespuesta['pre3.2_pi']; ?></td>
    </tr>
    <tr>
        <th>¿La empresa cuenta con alguna certificación de Calidad?</th>
        <td><?php echo $dataRespuesta['pre4.1_pi']; ?></td>
    </tr>
    <tr>
        <th>Si su respuesta a la anterior pregunta fue SI, mencione ¿Cual?</th>
        <td><?php echo $dataRespuesta['pre4.2_pi']; ?></td>
    </tr>
    <tr>
        <th>¿Con relación al grado de afectación de sus procesos internos durante el primer año de convivencia con el Covid -19? Evalúe del 1 al 5, siendo 1 el menor nivel y 5 el mayor nivel de afectación.</th>
        <td><?php echo $dataRespuesta['pre5.1_pi']; ?></td>
        <td><?php echo $dataRespuesta['pre5.2_pi']; ?></td>
        <td><?php echo $dataRespuesta['pre5.3_pi']; ?></td>
        <td><?php echo $dataRespuesta['pre5.4_pi']; ?></td>
        <td><?php echo $dataRespuesta['pre5.5_pi']; ?></td>
        <td><?php echo $dataRespuesta['pre5.6_pi']; ?></td>
        <td><?php echo $dataRespuesta['pre5.7_pi']; ?></td>
    </tr>
    <tr>
        <th>¿Cuáles han sido los cambios más importantes que ha tenido con sus proveedores durante el primer año de convivencia con el Covid-19?</th>
        <td><?php echo $dataRespuesta['pre6.1_pi']; ?></td>
    </tr>
    <tr>
        <th>Si su selección a la pregunta anterior fue CAMBIOS EN LOS MEDIOS DE PAGO, INDIQUE CUALES</th>
        <td><?php echo $dataRespuesta['pre6.2_pi']; ?></td>
    </tr>
    <tr>
        <th>¿Identifique cuáles han sido los cambios más importantes que ha tenido con sus clientes durante el primer año de convivencia con el Covid-19?</th>
        <td><?php echo $dataRespuesta['pre7_pi']; ?></td>
    </tr>
    <tr>
        <th>Considera que el grado de rentabilidad de los nuevos productos lanzados al mercado durante el primer año de convivencia con el Covid-19 ha sido</th>
        <td><?php echo $dataRespuesta['pre8_pi']; ?></td>
    </tr>
    <td style="font-size: 20px;font-weight: bold;">Perspectiva Financiera</td>
    <tr>
        <th>¿La empresa se sujetó al subsidio de Nómina (PAEF) decretado por el Gobierno Nacional?  </th>
        <td><?php echo $dataRespuesta['pre1_pf']; ?></td>
    </tr>
    <tr>
        <th>Si contestó No a la anterior pregunta marque alguna(s) de las siguientes razones</th>
        <td><?php echo $dataRespuesta['pre1.1_pf']; ?></td>
    </tr>
    <tr>
        <th>¿Recibió algún beneficio de las entidades financieras como empresario a raíz de la contingencia por el Covid–19?</th>
        <td><?php echo $dataRespuesta['pre2_pf']; ?></td>
    </tr>
    <tr>
        <th>Si su respuesta a la anterior pregunta fue SI, mencione ¿Cual?</th>
        <td><?php echo $dataRespuesta['pre2.1_pf']; ?></td>
    </tr>
    <tr>
        <th>¿Realizó reliquidaciones de sus obligaciones financieras originadas principalmente por la pandemia?</th>
        <td><?php echo $dataRespuesta['pre3.1_pf']; ?></td>
    </tr>
    <tr>
        <th>Si respondió SI a la anterior pregunta, ¿ésta reliquidación de las obligaciones financieras le permitió generar flujo de caja mejorando la situación de su empresa?</th>
        <td><?php echo $dataRespuesta['pre3.2_pf']; ?></td>
    </tr>
    <tr>
        <th>Su empresa lleva Contabilidad de</th>
        <td><?php echo $dataRespuesta['pre4_pf']; ?></td>
    </tr>
    <tr>
        <th>¿La facturación relacionada con esta área Contable es generada y archivada adecuadamente?</th>
        <td><?php echo $dataRespuesta['pre5_pf']; ?></td>
    </tr>
    <tr>
        <th>¿La empresa realiza control mensual de sus costos y gastos?</th>
        <td><?php echo $dataRespuesta['pre6_pf']; ?></td>
    </tr>
    <tr>
        <th>¿Cuál ha sido el nivel de afectación de sus costos y gastos durante el primer año de convivencia con el Covid-19?</th>
        <td><?php echo $dataRespuesta['pre7_pf']; ?></td>
    </tr>
    <tr>
        <th>¿Realiza una planificación presupuestal de sus ingresos y egresos?</th>
        <td><?php echo $dataRespuesta['pre8_pf']; ?></td>
    </tr>
    <tr>
        <th>¿Tiene usted conocimiento de que son los Indicadores financieros?</th>
        <td><?php echo $dataRespuesta['pre9.1_pf']; ?></td>
    </tr>
    <tr>
        <th>Si respondió SI a la anterior pregunta, su empresa tiene definidos e interpreta los indicadores financieros?</th>
        <td><?php echo $dataRespuesta['pre9.2_pf']; ?></td>
    </tr>
    <tr>
        <th>¿Le fueron aprobados préstamos de la banca comercial durante la pandemia? </th>
        <td><?php echo $dataRespuesta['pre10.1_pf']; ?></td>
    </tr>
    <tr>
        <th>Si respondió Sí a la anterior pregunta ¿Mencione qué montos?</th>
        <td><?php echo $dataRespuesta['pre10.2_pf']; ?></td>
    </tr>
    <tr>
        <th>¿Cómo ha financiado sus actividades a lo largo de la pandemia del Covid-19?</th>
        <td><?php echo $dataRespuesta['pre11_pf']; ?></td>
    </tr>
    <tr>
        <th>La liquidez o la disponibilidad de efectivo de su empresa durante el primer año de convivencia con la pandemia por el Covid-19 ha sido</th>
        <td><?php echo $dataRespuesta['pre12_pf']; ?></td>
    </tr>
    <tr>
        <th>Considera que las ganancias de su negocio durante el primer año de covid-19 en comparación al año anterior</th>
        <td><?php echo $dataRespuesta['pre13_pf']; ?></td>
    </tr>
    <tr>
        <th>Reconoce que la pérdida de sus ganancias en el primer año del covid-19 obedeció principalmente a</th>
        <td><?php echo $dataRespuesta['pre14_pf']; ?></td>
    </tr>
    <tr>
        <th>¿Durante la pandemia los ingresos que ha recibido su negocio o empresa le han permitido sostenerse económicamente?</th>
        <td><?php echo $dataRespuesta['pre15_pf']; ?></td>
    </tr>
</table>