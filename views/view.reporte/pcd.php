<?php

/*Perspectiva de crecimiento y desarrollo*/

$consultaPuntaje = $conexion->prepare("SELECT * FROM respuestas WHERE nit_empresa = '$nitEmpresa'");
$consultaPuntaje->execute();

$datPuntaje = $consultaPuntaje->fetch(PDO::FETCH_ASSOC);

$contadoDC = 0; $contadoPC = 0; $contadoPCI = 0; $contadoPF = 0;

if($datPuntaje['pre1_pcd'] == "Si"){
    $contadoDC++;
}

if($datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas' || $datPuntaje['pre1.1_pcd'] == 'Innovacion tecnicas' || $datPuntaje['pre1.1_pcd'] == 'Habilidades blandas' || $datPuntaje['pre1.1_pcd'] == 'Atencion al cliente' || $datPuntaje['pre1.1_pcd'] == 'Liderazgo'){
    $contadoDC += 0.16;
}else if($datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Innovacion tecnicas' || $datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Habilidades blandas' || $datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Atencion al cliente' || $datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Liderazgo' || $datPuntaje['pre1.1_pcd'] == 'Innovacion tecnicas, Habilidades blandas' || $datPuntaje['pre1.1_pcd'] == 'Innovacion tecnicas, Atencion al cliente' || $datPuntaje['pre1.1_pcd'] == 'Innovacion tecnicas, Liderazgo' || $datPuntaje['pre1.1_pcd'] == 'Habilidades blandas, Atencion al cliente' || $datPuntaje['pre1.1_pcd'] == 'Habilidades blandas, Liderazgo' || $datPuntaje['pre1.1_pcd'] == 'Atencion al cliente, Liderazgo'){
    $contadoDC += 0.32;
}else if($datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Innovacion tecnicas, Habilidades blandas,' || $datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Innovacion tecnicas, Atencion al cliente' || $datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Innovacion tecnicas, Liderazgo' || $datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Habilidades blandas, Atencion al cliente' || $datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Habilidades blandas, Liderazgo' || $datPuntaje['pre1.1_pcd'] == 'Innovacion tecnicas, Habilidades blandas, Atencion al cliente' || $datPuntaje['pre1.1_pcd'] == 'Innovacion tecnicas, Habilidades blandas, Liderazgo'){
    $contadoDC += 0.44;
}else if($datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Innovacion tecnicas, Habilidades blandas, Atencion al cliente' || $datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Innovacion tecnicas, Habilidades blandas, Liderazgo'){
    $contadoDC += 0.56;
}else if($datPuntaje['pre1.1_pcd'] == 'Mercadeo y ventas, Innovacion tecnicas, Habilidades blandas, Atencion al cliente, Liderazgo'){
    $contadoDC += 0.68;
}

if($datPuntaje['pre2_pcd'] == "Si"){
    $contadoDC = $contadoDC + 0.5;
}else if($datPuntaje['pre2_pcd'] == 'No'){
    $contadoDC = $contadoDC + 0.5;
}

if($datPuntaje['pre3.1_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre3.1_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre3.1_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre3.1_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre3.2_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre3.2_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre3.2_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre3.2_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre3.3_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre3.3_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre3.3_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre3.3_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre3.4_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre3.4_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre3.4_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre3.4_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre3.5_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre3.5_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre3.5_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre3.5_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre3.6_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre3.6_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre3.6_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre3.6_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre4.1_pcd'] == 'Ventas' || $datPuntaje['pre4.1_pcd'] == 'Empleo'){
    $contadoDC += 0.08;
}

if($datPuntaje['pre4.2_pcd'] == 'Ventas' || $datPuntaje['pre4.2_pcd'] == 'Empleo'){
    $contadoDC += 0.08;
}

if($datPuntaje['pre4.3_pcd'] == 'Ventas' || $datPuntaje['pre4.3_pcd'] == 'Empleo'){
    $contadoDC += 0.08;
}

if($datPuntaje['pre4.4_pcd'] == 'Ventas' || $datPuntaje['pre4.4_pcd'] == 'Empleo'){
    $contadoDC += 0.08;
}

if($datPuntaje['pre4.5_pcd'] == 'Ventas' || $datPuntaje['pre4.5_pcd'] == 'Empleo'){
    $contadoDC += 0.08;
}

if($datPuntaje['pre4.6_pcd'] == 'Ventas' || $datPuntaje['pre4.6_pcd'] == 'Empleo'){
    $contadoDC += 0.08;
}

if($datPuntaje['pre5_pcd'] == 'Si'){
    $contadoDC++;
}

if($datPuntaje['pre6_pcd'] == 'De proceso, De producto, De Mercado, De tipo organizacional'){
    $contadoDC++;
}else if($datPuntaje['pre6_pcd'] == 'De proceso, De producto, De Mercado' || $datPuntaje['pre6_pcd'] == 'De proceso, De producto, De tipo organizacional'){
    $contadoDC += 0.75;
}else if($datPuntaje['pre6_pcd'] == 'De proceso, De producto' || $datPuntaje['pre6_pcd'] == 'De proceso, De Mercado' || $datPuntaje['pre6_pcd'] == 'De proceso, De tipo organizacional' || $datPuntaje['pre6_pcd'] == 'De producto, De Mercado' || $datPuntaje['pre6_pcd'] == 'De producto, De tipo organizacional' || $datPuntaje['pre6_pcd'] == 'De Mercado, De tipo organizacional'){
    $contadoDC += 0.5;
}else if($datPuntaje['pre6_pcd'] == 'De proceso' || $datPuntaje['pre6_pcd'] == 'De producto' || $datPuntaje['pre6_pcd'] == 'De Mercado' || $datPuntaje['pre6_pcd'] == 'De tipo organizacional'){
    $contadoDC += 0.25;
}

if($datPuntaje['pre7_pcd'] == 'Cierre parcial'){
    $contadoDC += 0.2;
}else if($datPuntaje['pre7_pcd'] == 'Nunca cerro'){
    $contadoDC += 0.5;
}

if($datPuntaje['pre8.1_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre8.1_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre8.1_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre8.1_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre8.2_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre8.2_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre8.2_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre8.2_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre8.3_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre8.3_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre8.3_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre8.3_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre8.4_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre8.4_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre8.4_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre8.4_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre8.5_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre8.5_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre8.5_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre8.5_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre8.6_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre8.6_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre8.6_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre8.6_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre8.7_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre8.7_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre8.7_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre8.7_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre8.8_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre8.8_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre8.8_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre8.8_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre9.1_pcd'] == 'Excelente'){
    $contadoDC += 0.33;
}else if($datPuntaje['pre9.1_pcd'] == 'Buena'){
    $contadoDC += 0.2;
}else if($datPuntaje['pre9.1_pcd'] == 'Regular'){
    $contadoDC += 0.1;
}

if($datPuntaje['pre9.2_pcd'] == 'Excelente'){
    $contadoDC += 0.33;
}else if($datPuntaje['pre9.2_pcd'] == 'Buena'){
    $contadoDC += 0.2;
}else if($datPuntaje['pre9.2_pcd'] == 'Regular'){
    $contadoDC += 0.1;
}

if($datPuntaje['pre9.3_pcd'] == 'Excelente'){
    $contadoDC += 0.33;
}else if($datPuntaje['pre9.3_pcd'] == 'Buena'){
    $contadoDC += 0.2;
}else if($datPuntaje['pre9.3_pcd'] == 'Regular'){
    $contadoDC += 0.1;
}

if($datPuntaje['pre10.1_pcd'] == 'Excelente'){
    $contadoDC += 0.33;
}else if($datPuntaje['pre10.1_pcd'] == 'Buena'){
    $contadoDC += 0.2;
}else if($datPuntaje['pre10.1_pcd'] == 'Regular'){
    $contadoDC += 0.1;
}

if($datPuntaje['pre10.2_pcd'] == 'Excelente'){
    $contadoDC += 0.33;
}else if($datPuntaje['pre10.2_pcd'] == 'Buena'){
    $contadoDC += 0.2;
}else if($datPuntaje['pre10.2_pcd'] == 'Regular'){
    $contadoDC += 0.1;
}

if($datPuntaje['pre10.3_pcd'] == 'Excelente'){
    $contadoDC += 0.33;
}else if($datPuntaje['pre10.3_pcd'] == 'Buena'){
    $contadoDC += 0.2;
}else if($datPuntaje['pre10.3_pcd'] == 'Regular'){
    $contadoDC += 0.1;
}

if($datPuntaje['pre10.4_pcd'] == 'Excelente'){
    $contadoDC += 0.33;
}else if($datPuntaje['pre10.4_pcd'] == 'Buena'){
    $contadoDC += 0.2;
}else if($datPuntaje['pre10.4_pcd'] == 'Regular'){
    $contadoDC += 0.1;
}

if($datPuntaje['pre10.5_pcd'] == 'Excelente'){
    $contadoDC += 0.33;
}else if($datPuntaje['pre10.5_pcd'] == 'Buena'){
    $contadoDC += 0.2;
}else if($datPuntaje['pre10.5_pcd'] == 'Regular'){
    $contadoDC += 0.1;
}

if($datPuntaje['pre11.1_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre11.1_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre11.1_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre11.1_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre11.2_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre11.2_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre11.2_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre11.2_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre11.3_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre11.3_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre11.3_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre11.3_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre11.4_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre11.4_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre11.4_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre11.4_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre12_pcd'] == 'Teletrabajo' || $datPuntaje['pre12_pcd'] == 'Presencial' || $datPuntaje['pre12_pcd'] == 'Semipresencial'){
    $contadoDC += 0.25;
}

if($datPuntaje['pre13_pcd'] == 'Estres a sus empleados, Ineficiencia en la asignacion y ejecuccion de tareas, Sobrecarga laboral, Afectacion en salud mental, Afectacion en el relacionamiento socio-laboral'){
    $contadoDC += 1;
}else if($datPuntaje['pre13_pcd'] == 'Estres a sus empleados, Ineficiencia en la asignacion y ejecuccion de tareas, Sobrecarga laboral, Afectacion en salud mental' || $datPuntaje['pre13_pcd'] == 'Estres a sus empleados, Ineficiencia en la asignacion y ejecuccion de tareas, Sobrecarga laboral, Afectacion en el relacionamiento socio-laboral'){
    $contadoDC += 0.8;
}
else if($datPuntaje['pre13_pcd'] == 'Estres a sus empleados, Ineficiencia en la asignacion y ejecuccion de tareas, Sobrecarga laboral' || $datPuntaje['pre13_pcd'] == 'Estres a sus empleados, Ineficiencia en la asignacion y ejecuccion de tareas, Afectacion en salud mental' || $datPuntaje['pre13_pcd'] == 'Estres a sus empleados, Ineficiencia en la asignacion y ejecuccion de tareas, Afectacion en el relacionamiento socio-laboral' || $datPuntaje['pre13_pcd'] == 'Estres a sus empleados, Afectacion en el relacionamiento socio-laboral, Sobrecarga laboral' || $datPuntaje['pre13_pcd'] == 'Estres a sus empleados, Afectacion en el relacionamiento socio-laboral, Afectacion en el relacionamiento socio-laboral'
|| $datPuntaje['pre13_pcd'] == 'Estres a sus empleados, Afectacion en salud mental, Afectacion en el relacionamiento socio-laboral'){
    $contadoDC += 0.6;
}else if($datPuntaje['pre13_pcd'] == 'Estres a sus empleados' || $datPuntaje['pre13_pcd'] == 'Ineficiencia en la asignacion y ejecuccion de tareas' || $datPuntaje['pre13_pcd'] == 'Sobrecarga laboral' || $datPuntaje['pre13_pcd'] == 'Afectacion en salud mental' || $datPuntaje['pre13_pcd'] == 'Afectacion en el relacionamiento socio-laboral'){
    $contadoDC += 0.2;
}

if($datPuntaje['pre14_pcd'] == 'Si'){
    $contadoDC++;
}

if($datPuntaje['pre15_pcd'] != ''){
    $contadoDC += 0.33;
}

if($datPuntaje['pre16.1_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre16.1_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre16.1_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre16.1_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre16.2_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre16.2_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre16.2_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre16.2_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre16.3_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre16.3_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre16.3_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre16.3_pcd'] == 5){
    $contadoDC += 1;
}

if($datPuntaje['pre16.4_pcd'] == 2){
    $contadoDC += 0.25; 
}else if($datPuntaje['pre16.4_pcd'] == 3){
    $contadoDC += 0.5;
}else if($datPuntaje['pre16.4_pcd'] == 4){
    $contadoDC += 0.75;
}else if($datPuntaje['pre16.4_pcd'] == 5){
    $contadoDC += 1;
}


if($datPuntaje['pre17.1_pcd'] == 'Si'){
    $contadoDC++;
}

if($datPuntaje['pre17.2_pcd'] == 'Si'){
    $contadoDC++;
}


/*Faltarian 2 preguntas por formalizar el puntaje y revisar*/

//echo $contadoDC;

/*Perspectiva clientes*/

if($datPuntaje['pre1_pc'] == 'Alto costo'){
    $contadoPC++;
}else if($datPuntaje['pre1_pc'] == 'Bajo costo'){
    $contadoPC = $contadoPC - 1;
}

if($datPuntaje['pre2.1_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre2.1_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre2.1_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre2.1_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre2.2_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre2.2_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre2.2_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre2.2_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre2.3_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre2.3_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre2.3_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre2.3_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre2.4_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre2.4_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre2.4_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre2.4_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre2.5_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre2.5_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre2.5_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre2.5_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre3_pc'] == 'Si'){
    $contadoPC++;
}

if($datPuntaje['pre4.1_pc'] == 'Si'){
    $contadoPC++;
}

if($datPuntaje['pre5_pc'] == 'Disminuyo el numero de cliente en menos del 50%'){
    $contadoPC += 0.4;
}else if($datPuntaje['pre5_pc'] == 'Disminuyo el numero de clientes en más del 50%'){
    $contadoPC += 0.15;
}else if($datPuntaje['pre5_pc'] == 'Crecio menos del 50%'){
    $contadoPC += 0.15;
}else if($datPuntaje['pre5_pc'] == 'Crecio mas del 50%'){
    $contadoPC += 0.4;
}

if($datPuntaje['pre6_pc'] == 'Destino menos de un 20% de los gastos totales.'){
    $contadoPC += 0.25;
}else if($datPuntaje['pre6_pc'] == 'Destino entre un 20% a 50% de los gastos totales.'){
    $contadoPC += 0.4;
}

if($datPuntaje['pre7.1_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre7.1_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre7.1_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre7.1_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre7.2_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre7.2_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre7.2_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre7.2_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre7.3_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre7.3_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre7.3_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre7.3_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre7.4_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre7.4_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre7.4_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre7.4_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre7.5_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre7.5_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre7.5_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre7.5_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre7.6_pc'] == 2){
    $contadoPC += 0.25; 
}else if($datPuntaje['pre7.6_pc'] == 3){
    $contadoPC += 0.5;
}else if($datPuntaje['pre7.6_pc'] == 4){
    $contadoPC += 0.75;
}else if($datPuntaje['pre7.6_pc'] == 5){
    $contadoPC += 1;
}

if($datPuntaje['pre8_pc'] == 'Si da respuesta de forma oportuna'){
    $contadoPC += 0.5;
}else if($datPuntaje['pre8_pc'] ==  'Lo realiza con poca frecuencia' || $datPuntaje['pre8_pc'] ==  'Lo realiza con poca frecuencia'){
    $contadoPC += 0.25;
}

if($datPuntaje['pre9_pc'] == 'Buzon PQRS, Entrevista, Encuesta, Llamada telefonica'){
    $contadoPC++;
}else if($datPuntaje['pre9_pc'] == 'Buzon PQRS, Entrevista, Encuesta' || $datPuntaje['pre9_pc'] == 'Buzon PQRS, Entrevista, Llamada telefonica'){
    $contadoPC += 0.75;
}else if($datPuntaje['pre9_pc'] == 'Buzon PQRS, Entrevista' || $datPuntaje['pre9_pc'] == 'Buzon PQRS, Encuesta' || $datPuntaje['pre9_pc'] == 'Buzon PQRS, Llamada telefonica' || $datPuntaje['pre9_pc'] == 'Entrevista, Encuesta' || $datPuntaje['pre9_pc'] == 'Entrevista, Llamada telefonica' || $datPuntaje['pre9_pc'] == 'Encuesta, Llamada telefonica'){
    $contadoPC += 0.5;
}else if($datPuntaje['pre9_pc'] == 'Buzon PQRS' || $datPuntaje['pre9_pc'] == 'Entrevista' || $datPuntaje['pre9_pc'] == 'Encuesta' || $datPuntaje['pre9_pc'] == 'Llamada telefonica'){
    $contadoPC += 0.25;
}

/*Perspectiva procesos internos*/

if($datPuntaje['pre3.1_pi'] == 'Si'){
    $contadoPCI++;
}

if($datPuntaje['pre4.1_pi'] == 'Si'){
    $contadoPCI++;
}

if($datPuntaje['pre5.1_pi'] == 2){
    $contadoPCI += 0.25; 
}else if($datPuntaje['pre5.1_pi'] == 3){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre5.1_pi'] == 4){
    $contadoPCI += 0.75;
}else if($datPuntaje['pre5.1_pi'] == 5){
    $contadoPCI += 1;
}

if($datPuntaje['pre5.2_pi'] == 2){
    $contadoPCI += 0.25; 
}else if($datPuntaje['pre5.2_pi'] == 3){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre5.2_pi'] == 4){
    $contadoPCI += 0.75;
}else if($datPuntaje['pre5.2_pi'] == 5){
    $contadoPCI += 1;
}

if($datPuntaje['pre5.3_pi'] == 2){
    $contadoPCI += 0.25; 
}else if($datPuntaje['pre5.3_pi'] == 3){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre5.3_pi'] == 4){
    $contadoPCI += 0.75;
}else if($datPuntaje['pre5.3_pi'] == 5){
    $contadoPCI += 1;
}

if($datPuntaje['pre5.4_pi'] == 2){
    $contadoPCI += 0.25; 
}else if($datPuntaje['pre5.4_pi'] == 3){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre5.4_pi'] == 4){
    $contadoPCI += 0.75;
}else if($datPuntaje['pre5.4_pi'] == 5){
    $contadoPCI += 1;
}

if($datPuntaje['pre5.5_pi'] == 2){
    $contadoPCI += 0.25; 
}else if($datPuntaje['pre5.5_pi'] == 3){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre5.5_pi'] == 4){
    $contadoPCI += 0.75;
}else if($datPuntaje['pre5.5_pi'] == 5){
    $contadoPCI += 1;
}

if($datPuntaje['pre5.6_pi'] == 2){
    $contadoPCI += 0.25; 
}else if($datPuntaje['pre5.6_pi'] == 3){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre5.6_pi'] == 4){
    $contadoPCI += 0.75;
}else if($datPuntaje['pre5.6_pi'] == 5){
    $contadoPCI += 1;
}

if($datPuntaje['pre5.7_pi'] == 2){
    $contadoPCI += 0.25; 
}else if($datPuntaje['pre5.7_pi'] == 3){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre5.7_pi'] == 4){
    $contadoPCI += 0.75;
}else if($datPuntaje['pre5.7_pi'] == 5){
    $contadoPCI += 1;
}

if($datPuntaje['pre6.1_pi'] == 'Cambios en los plazos de pago' || $datPuntaje['pre6.1_pi'] == 'Incremento de costos' || $datPuntaje['pre6.1_pi'] == 'Cambios en los volumenes de compra' || $datPuntaje['pre6.1_pi'] == 'Cambios en los medios de pago'){
    $contadoPCI += 0.25;
}else if($datPuntaje['pre6.1_pi'] == 'Cambios en los plazos de pago, Incremento de costos' || $datPuntaje['pre6.1_pi'] == 'Cambios en los plazos de pago, Cambios en los volumenes de compra' || $datPuntaje['pre6.1_pi']== 'Cambios en los plazos de pago, Cambios en los medios de pago'){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre6.1_pi'] == 'Incremento de costos, Cambios en los plazos de pago' || $datPuntaje['pre6.1_pi'] == 'Incremento de costos, Cambios en los volumenes de compra' || $datPuntaje['pre6.1_pi'] == 'Incremento de costos, Cambios en los medios de pago'){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre6.1_pi'] == 'Cambios en los plazos de pago, Cambios en los volumenes de compra' || $datPuntaje['pre6.1_pi'] == 'Cambios en los plazos de pago, Cambios en los medios de pago'){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre6.1_pi'] == 'Cambios en los plazos de pago, Incremento de costos, Cambios en los volumenes de compra' || $datPuntaje['pre6.1_pi'] == 'Cambios en los plazos de pago, Incremento de costos, Cambios en los medios de pago'){
    $contadoPCI += 0.75;
}else if($datPuntaje['pre6.1_pi'] == 'Incremento de costos, Cambios en los volumenes, Cambios en los plazos de pago'){
    $contadoPCI += 0.75;
}else if($datPuntaje['pre6.1_pi'] == 'Cambios en los plazos de pago, Incremento de costos, Cambios en los volumenes de compra, Cambios en los plazos de pago'){
    $contadoPCI++;
}

if($datPuntaje['pre6.2_pi'] == 'Transaccion Electronica, Pagos PSE, Pago directo a la empresa'){
    $contadoPCI += 0.75;
}else if($datPuntaje['pre6.2_pi'] == 'Transaccion Electronica, Pagos PSE' || $datPuntaje['pre6.2_pi'] == 'Transaccion Electronica, Pago directo a la empresa' || $datPuntaje['pre6.2_pi'] == 'Pagos PSE, Pago directo a la empresa'){
    $contadoPCI += 0.5;
}else if($datPuntaje['pre6.2_pi'] == 'Transaccion Electronica' || $datPuntaje['pre6.2_pi'] == 'Pagos PSE' || $datPuntaje['pre6.2_pi'] == 'Pago directo a la empresa'){
    $contadoPCI += 0.25;
}

if($datPuntaje['pre7_pi'] == 'Disminucion compras, Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales), Canales distribucion, Medios de pago, Modalidades pago (credito o Contado)'){
    $contadoPCI++;
}else if($datPuntaje['pre7_pi'] == 'Disminucion compras, Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales), Canalaes distribucion, Medios de pago' || $datPuntaje['pre7_pi'] == 'Disminucion compras, Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales), Canalaes distribucion, Modalidades pago (credito o Contado)'){
    $contadoPCI += 0.8;
}else if($datPuntaje['pre7_pi'] == 'Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales), Canalaes distribucion, Medios de pago, Modalidades pago (credito o Contado)'){
    $contadoPCI += 0.8;
}else if($datPuntaje['pre7_pi'] == 'Disminucion compras, Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales), Canales distribucion' || $datPuntaje['pre7_pi'] == 'Disminucion compras, Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales), Modalidades pago (credito o Contado)' || $datPuntaje['pre7_pi'] == 'Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales), Canales distribucion, Modalidades pago (credito o Contado)'){
    $contadoPCI += 0.6;
}else if($datPuntaje['pre7_pi'] == 'Disminucion compras, Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales)' || $datPuntaje['pre7_pi'] == 'Disminucion compras, Canales distribucion' || $datPuntaje['pre7_pi'] == 'Disminucion compras, Medios de pago' || $datPuntaje['pre7_pi'] == 'Disminucion compras, Modalidades pago (credito o Contado)'){
    $contadoPCI += 0.4;
}else if($datPuntaje['pre7_pi'] == 'Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales), Canales distribucion' || $datPuntaje['pre7_pi'] == 'Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales), Canalaes distribucion, Modalidades pago (credito o Contado)'){
    $contadoPCI += 0.4;
}else if($datPuntaje['pre7_pi'] == 'Disminucion compras' || $datPuntaje['pre7_pi'] == 'Implementacion de Plataformas de compra (WhatsApp, Web, redes sociales)' || $datPuntaje['pre7_pi'] == 'Canalaes distribucion' || $datPuntaje['pre7_pi'] == 'Medios de pago' || $datPuntaje['pre7_pi'] == 'Modalidades pago (credito o Contado)'){
    $contadoPCI += 0.2;
}



if($datPuntaje['pre8_pi'] == 'Muy bueno'){
    $contadoPCI += 0.5; 
}else if($datPuntaje['pre8_pi'] == 'Bueno'){
    $contadoPCI += 0.3;
}else if($datPuntaje['pre8_pi'] == 'Regular'){
    $contadoPCI += 0.75;
}

/*Perspectiva FINANCIERA*/ 

if($datPuntaje['pre1_pf'] == 'Si'){
    $contadoPF++;
}

if($datPuntaje['pre1.1_pf'] != ''){
    $contadoPF += 0.25;
}

if($datPuntaje['pre2_pf'] == 'Si'){
    $contadoPF++;
}

if($datPuntaje['pre3.1_pf'] == 'Si'){
    $contadoPF++;
}

if($datPuntaje['pre3.2_pf'] == 'Si'){
    $contadoPF++;
}

//falta pregunta 4

if($datPuntaje['pre5_pf'] == 'Si'){
    $contadoPF++;
}

if($datPuntaje['pre6_pf'] == 'Si'){
    $contadoPF++;
}

if($datPuntaje['pre7_pf'] == 'Muy alto'){
    $contadoPF++;
}else if($datPuntaje['pre7_pf'] == 'Alto'){
    $contadoPF += 0.75;
}else if($datPuntaje['pre7_pf'] == 'Medio'){
    $contadoPF += 0.5;
}

if($datPuntaje['pre8_pf'] == 'Si'){
    $contadoPF++;
}

if($datPuntaje['pre9.1_pf'] == 'Si'){
    $contadoPF++;
}

if($datPuntaje['pre9.2_pf'] == 'Si'){
    $contadoPF++;
}

if($datPuntaje['pre10.1_pf'] == 'Si'){
    $contadoPF++;
}

//Falta pregunta 11

if($datPuntaje['pre12_pf'] == 'Alto'){
    $contadoPF++;
}else if($datPuntaje['pre12_pf'] == 'Moderado'){
    $contadoPF += 0.75;
}

if($datPuntaje['pre13_pf'] == 'Aumentaron'){
    $contadoPF++;
}else if($datPuntaje['pre13_pf'] == 'Disminuyeron'){
    $contadoPF += 0.5;
}else if($datPuntaje['pre13_pf'] == 'Obtuvo perdidas'){
    $contadoPF -= 0.5;
}

//Falta pregunta 14

if($datPuntaje['pre15_pf'] == 'Si'){
    $contadoPF++;
}


/*Porcentajes*/
$porcentajeDC = ($contadoDC * 25) / 25;
$porcentajePC = ($contadoPC * 25) / 25;
$porcentajePCI = ($contadoPCI * 25) / 25;
$porcentajePF = ($contadoPF * 25) / 25;


/*Total*/

$suma = ($porcentajeDC+$porcentajePC+$porcentajePCI+$porcentajePF);

?>