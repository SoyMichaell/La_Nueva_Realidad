<?php
require_once "../model/conexion.php";
$conexion = new Conexion();
error_reporting(0);
if (isset($_POST['btnAccion'])) {
    $id = $_POST['id__empresa'];
    $id__persona = $_POST['id__persona'];
    $nit__empresa = $_POST['nit__empresa'];
    $tipo__empresa = $_POST['tipo__empresa'];
    $razon__empresa = $_POST['razon__empresa'];
    $representante__empresa = $_POST['representante__empresa'];
    $fijo__empresa = $_POST['fijo__empresa'];
    $movil__empresa = $_POST['movil__empresa'];
    $fax__empresa = $_POST['fax__empresa'];
    $direccion__empresa = $_POST['direccion__empresa'];
    $departamento__empresa = $_POST['departamento__empresa'];
    $ciudad__empresa = $_POST['ciudad__empresa'];
    $sitio__empresa = $_POST['sitio__empresa'];
    $correo__empresa = $_POST['correo__empresa'];
    $sector__ciudad = $_POST['sector__ciudad'];
    $ciiu__empresa = $_POST['ciiu__empresa'];
    $rango__empresa = $_POST['rango__empresa'];
    $primaria__empresa = $_POST['primaria__empresa'];
    $bachiller__empresa = $_POST['bachiller__empresa'];
    $tecnico__empresa = $_POST['tecnico__empresa'];
    $tecnologo__empresa = $_POST['tecnologo__empresa'];
    $profesional__empresa = $_POST['profesional__empresa'];
    $em__empresa = $_POST['em__empresa'];
    $activos__empresa = $_POST['activos__empresa'];
    $fecha__empresa = $_POST['fecha__empresa'];
    switch ($_POST['btnAccion']) {
        case 'RegistrarEmpresa':
            $InsertarEmpresa = $conexion->prepare("INSERT INTO empresas VALUES (
                NULL,'$nit__empresa','$tipo__empresa','$razon__empresa','$representante__empresa',
                '$fijo__empresa','$movil__empresa','$fax__empresa','$direccion__empresa',
                '$departamento__empresa',$ciudad__empresa,'$sitio__empresa','$correo__empresa',
                $sector__ciudad,'$ciiu__empresa',$rango__empresa,$primaria__empresa,$bachiller__empresa,
                $tecnico__empresa,$tecnologo__empresa,$profesional__empresa,$em__empresa,$activos__empresa,'$fecha__empresa',
                '$id__persona',NOW())");
            $InsertarEmpresa->execute();
            if (!$InsertarEmpresa) {
                echo "Algo fallo";
            } else {
                header('location:../registrar_empresa.php');
            }
            die();
            break;
        case 'EditarEmpresa':
            $ActualizarEmpresa = $conexion->prepare("UPDATE empresas SET nit_empresa = '$nit__empresa',
            tipo_empresa='$tipo__empresa',razon_social='$razon__empresa',representante_legal='$representante__empresa',
            numero_fijo='$fijo__empresa',numero_movil='$movil__empresa',numero_fax='$fax__empresa',
            direccion='$direccion__empresa',departamento='$departamento__empresa',municipio=$ciudad__empresa,
            urlweb='$sitio__empresa',correo='$correo__empresa',sector_economico=$sector__ciudad,codigo_ciiu='$ciiu__empresa',
            rango_accion=$rango__empresa,primaria=$primaria__empresa,bachiller=$bachiller__empresa,tecnico=$tecnico__empresa,tecnologo=$tecnologo__empresa,profesional=$profesional__empresa,es_ma=$em__empresa,
            nivel_activo=$activos__empresa,fecha_constitucion='$fecha__empresa' WHERE id=$id");
            $ActualizarEmpresa->execute();
            if (!$ActualizarEmpresa) {
                echo "Algo fallo";
            } else {
                header('location:../listar_empresa.php');
            }
            die();
            break;
        case 'ActualizarEmpresaCCC':
            $Id_ccc = $_POST['Id'];
            $identificacion_ccc = $_POST['identificacion'];
            $nit_ccc = $_POST['nit'];
            $fechamatricula_ccc = $_POST['fechamatricula'];
            $fecharenovacion_ccc = $_POST['fecharenovacion'];
            $direccion_ccc = $_POST['direccion'];
            $municipio_ccc = $_POST['municipio'];
            $telefono1_ccc = $_POST['telefono1'];
            $telefono2_ccc = $_POST['telefono2'];
            $telefono3_ccc = $_POST['telefono3'];
            $correo_ccc = $_POST['correo'];
            $ciiu_actividad1_ccc = $_POST['ciiu_actividad1'];
            $ciiu_actividad2_ccc = $_POST['ciiu_actividad2'];
            $ciiu_actividad3_ccc = $_POST['ciiu_actividad3'];
            $ciiu_actividad4_ccc = $_POST['ciiu_actividad4'];
            $personal_ccc = $_POST['personal'];
            $activo_total_ccc = $_POST['activo_total'];
            $tamano_ccc = $_POST['tamano'];
            $nombre_propietario_ccc = $_POST['nombre_propietario'];
            $nombre_representante_ccc = $_POST['nombre_representante'];

            $ActualizarEmpresaCCC = $conexion->prepare("UPDATE empresas_2020 SET identificacion='$identificacion_ccc',
            nit='$nit_ccc',fecha_matricula='$fechamatricula_ccc',fecha_renovacion='$fecharenovacion_ccc',direccion='$direccion_ccc',municipio='$municipio_ccc',
            telefono1='$telefono1_ccc',telefono2='$telefono2_ccc',telefono3='$telefono3_ccc',correo='$correo_ccc',ciiu_actividad1='$ciiu_actividad1_ccc',
            ciiu_actividad2='$ciiu_actividad2_ccc',ciiu_actividad3='$ciiu_actividad3_ccc',ciiu_actividad4='$ciiu_actividad4_ccc',
            personal=$personal_ccc,activo_total=$activo_total_ccc,tamano='$tamano_ccc',nombre_propietario='$nombre_propietario_ccc',nombre_representante='$nombre_representante_ccc' WHERE Id = $Id_ccc ");
            $ActualizarEmpresaCCC->execute();
            if (!$ActualizarEmpresaCCC) {
                echo "Algo fallo";
            } else {
                header('location: ../dashboard.php');
            }
            die();
            break;
        case 'VolumenMuestra':
            $tpoblacion = $_POST['tpoblacion'];
            $nconfianza = $_POST['nconfianza'];
            $gerror = $_POST['gerror'];
            $opoblacion = $_POST['opoblacion'];
            $oprobabilidad = $_POST['oprobabilidad'];

            $volumenMuestra = + (($nconfianza * $nconfianza) * ($opoblacion) * ($oprobabilidad) * ($tpoblacion)) / (($tpoblacion) * ($gerror * $gerror) + ($nconfianza * $nconfianza) * ($opoblacion) * ($oprobabilidad));

            $InsertarVolumenMuestra = $conexion->prepare("INSERT INTO tamano_muestra VALUES (NULL,$volumenMuestra,NOW())");
            $InsertarVolumenMuestra->execute();
            if ($InsertarVolumenMuestra->rowCount() > 0) {
                header('location:../generar_muestra.php');
            } else {
                echo "Algo fallo";
            }
            die();
            break;
        case 'EliminarTamanoMuestra':
            $EliminarTamanoMuestra = $conexion->prepare("TRUNCATE TABLE tamano_muestra");
            $EliminarTamanoMuestra->execute();
            if ($EliminarTamanoMuestra) {
                header('location: ../generar_muestra.php');
            } else {
                echo "Algo fallo";
            }
            break;
        case 'GenerarMuestra':

            $ReiniciarAutoIncrement = $conexion->prepare("ALTER table muestra AUTO_INCREMENT=1; ");
            $ReiniciarAutoIncrement->execute();

            $sql_muestra_existente = $conexion->prepare("SELECT * FROM tamano_muestra");
            $sql_muestra_existente->execute();
            $tamano = $sql_muestra_existente->fetch(PDO::FETCH_ASSOC);

            $muestra = $_POST['muestra'];
            $aprendiz = $_POST['aprendiz'];

            for ($i = 0; $i <count($muestra); $i++) {
                $InsertarMuestra = $conexion->prepare("INSERT INTO muestra VALUES (NULL,$muestra[$i],'$aprendiz[$i]','Sin responder',NOW())");
                $InsertarMuestra->execute();
            }
            

            if ($InsertarMuestra->rowCount() > 0) {
                header('location:../generar_muestra.php');
            } else {
                echo "Algo fallo";
            }
            die();
            break;
        case 'EliminarMuestra':
            $EliminarMuestra = $conexion->prepare("TRUNCATE TABLE muestra");
            $EliminarMuestra->execute();
            if ($EliminarMuestra) {
                header('location: ../generar_muestra.php');
            } else {
                echo "Algo fallo";
            }
            break;
        case 'CambiarEstado':
            $id_muestra = $_POST['id_muestra'];
            $ActualizarEstado = $conexion->prepare("UPDATE muestra SET estado_encuesta = 'Finalizada' WHERE id_muestra = $id_muestra ");
            $ActualizarEstado->execute();
            if ($ActualizarEstado) {
                header('location:../empresas_seleccionadas.php');
            } else {
                echo "Algo fallo";
            }
            break;
        case 'GuardarDiagnosticoEsp':
            $nitEmpresaDG = $_POST['nitEmpresaDG'];
            $perspectivaCD = $_POST['perspectivaCD'];
            $perspectivaPC = $_POST['perspectivaPC'];
            $perspectivaPCI = $_POST['perspectivaPCI'];
            $perspectivaPF = $_POST['perspectivaPF'];
            $perspectivaTT = $_POST['perspectivaTT'];
            $tipoReporte = $_POST['tipoDiag'];
            $ciiu = $_POST['ciiu'];

            $InsertarDiagnosticoGlobal = $conexion->prepare('INSERT INTO diagnostico_global VALUES (NULL, :nitempresa, :perspectivacd, :perspectivac, 
            :perspectivapi, :perspectivaf, :totalp, :ciiu, NOW())');
            $InsertarDiagnosticoGlobal->execute(array('nitempresa' => $nitEmpresaDG,
                                                      'perspectivacd' => $perspectivaCD,
                                                      'perspectivac' => $perspectivaPC,
                                                      'perspectivapi' => $perspectivaPCI,
                                                      'perspectivaf' => $perspectivaPF,
                                                      'totalp' => $perspectivaTT,
                                                      'ciiu' => $ciiu));
            if(!$InsertarDiagnosticoGlobal){
                echo 'Algo fallo';
            }else{
                header('location: ../dglobal.php?nitEmpresaConsultar='.$nitEmpresaDG.'&tipoReporte='.$tipoReporte);
            }
        break;
        case 'EliminarDiagnosticoEsp':
            $nitEmpresaDG = $_POST['nitEmpresaDG'];
            $tipoReporte = $_POST['tipoDiag'];
            $EliminarDiagnosticoEsp = $conexion->prepare('DELETE FROM diagnostico_global WHERE nit_empresa_d = :nitEmpresa');
            $EliminarDiagnosticoEsp->execute(array('nitEmpresa' => $nitEmpresaDG));
            if(!$EliminarDiagnosticoEsp){
                echo 'Algo fallo';
            }else{
                header('location: ../dglobal.php?nitEmpresaConsultar='.$nitEmpresaDG.'&tipoReporte='.$tipoReporte);
            }
        break;
        case 'EliminarDiagnostico':
            $EliminarDiagnosticoDB = $conexion->prepare('TRUNCATE TABLE diagnostico_global');
            if($EliminarDiagnosticoDB->execute() == 'OK'){
                header('location: ../reportes.php');
            }else{
                echo 'Algo fallo';
            }
        break;
        case 'GuardarDiagnosticoA':
            $codigo_a = $_POST['codigo_a'];
            $pcd = $_POST['pcd'];
            $pc = $_POST['pc'];
            $pii = $_POST['pii'];
            $pf = $_POST['pf'];
            $sumaActividad = $_POST['sumaActividad'];

            $InsertarActividad = $conexion->prepare("INSERT INTO comparativo_muestra_actividad 
            VALUES (NULL,'$codigo_a',$pcd,$pc,$pii,$pf,$sumaActividad,NOW())");
            $InsertarActividad->execute();
            if(!$InsertarActividad){
                echo 'Algo fallo';
            }else{
                header('location: ../dglobalActividad.php?sActividad='.$codigo_a.'&tipoReporte=dg');
            }
        break;
        case 'ActualizarDiagnosticoA':
            $codigo_a = $_POST['codigo_a'];
            $pcd = $_POST['pcd'];
            $pc = $_POST['pc'];
            $pii = $_POST['pii'];
            $pf = $_POST['pf'];
            $sumaActividad = $_POST['sumaActividad'];

            $ActualizarActividad = $conexion->prepare("UPDATE comparativo_muestra_actividad 
                                    SET perspectiva_c_d = $pcd, perspectiva_c = $pc,
                                    perspectiva_p_i = $pii, perspectiva_f = $pf, total_perspectiva = $sumaActividad
                                    WHERE id_actividad_c = '$codigo_a'");
            $ActualizarActividad->execute();
            if(!$ActualizarActividad){
                echo 'Algo fallo';
            }else{
                header('location: ../dglobalActividad.php?sActividad='.$codigo_a.'&tipoReporte=dg');
            }
        break;
        case 'EliminarDiagnosticoA':
            $codigo_a = $_POST['codigo_a'];
            $EliminarActividad = $conexion->prepare('DELETE FROM comparativo_muestra_actividad WHERE id_actividad_c = :codigo');
            $EliminarActividad->execute(array('codigo' => $codigo_a));
            if(!$EliminarActividad){
                echo 'Algo fallo';
            }else{
                header('location: ../dglobalActividad.php?sActividad='.$codigo_a.'&tipoReporte=dg');
            }
        break;
        }
}
