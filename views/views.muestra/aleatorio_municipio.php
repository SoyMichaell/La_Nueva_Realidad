<?php

$inicio = 15;
$fin = 53;

/*YOPAL*/
while ($cont1 <= $yopal) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'YOPAL')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont1++;
    }
}
/*VILLANUEVA*/
while ($cont2 <= $villanueva) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'VILLANUEVA')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont2++;
    }
}
/*AGUAZUL*/
while ($cont3 <= ceil($aguazul)) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'AGUAZUL')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont3++;
    }
}
/*PAZ DE ARIPORO*/
while ($cont4 <= ceil($paz)) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'PAZ DE ARIPORO')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont4++;
    }
}
/*TAURAMENA*/
while ($cont5 <= ceil($tauramena)) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'TAURAMENA')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont5++;
    }
}
/*MONTERREY*/
while ($cont6 <= ceil($monterrey)) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'MONTERREY')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont6++;
    }
}
/*TRINIDAD*/
while ($cont7 <= ceil($trinidad)) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'TRINIDAD')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont7++;
    }
}
/*PORE*/
while ($cont8 <= ceil($pore)) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'PORE')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont8++;
    }
}
/*HATO COROZAL*/
while ($cont9 <= ceil($hato)) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'HATO COROZAL')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont9++;
    }
}
/*SAN LUIS DE PALENQUE*/
while ($cont10 <= $sanluis) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'SAN LUIS DE PALENQUE')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont10++;
    }
}
/*OROCUE*/
while ($cont11 <= $orocue) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'OROCUE')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont11++;
    }
}
/*NUNCHIA*/
while ($cont12 <= $nunchia) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'NUNCHIA')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont12++;
    }
}
/*MANI*/
while ($cont13 <= $mani) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'MANI')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont13++;
    }
}
/*TAMARA*/
while ($cont14 <= $tamara) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'TAMARA')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont14++;
    }
}
/*CHAMEZA*/
while ($cont15 <= $chameza) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'CHAMEZA')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont15++;
    }
}
/*SACAMA*/
while ($cont16 <= $sacama) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'SACAMA')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont16++;
    }
}
/*SABANALARGA*/
while ($cont17 <= $sabanalarga) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'SABANALARGA')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
    <?php
        $cont17++;
    }
}
/*LA SALINA*/
while ($cont18 <= ceil($lasalina)) {
    $aleatorio = rand(1, 13800);
    $aleatorioA = rand($inicio, $fin);
    $sql = $conexion->prepare("SELECT * FROM empresas_2020 WHERE (Id = $aleatorio && municipio = 'LA SALINA')");
    $sql->execute();
    $r = $sql->rowCount();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    if ($r > 0) { ?>
        <div class="row d-none">
            <div class="col-md-3 mt-1">
                <input class="form-control" name="muestra[]" type="number" value="<?php echo $aleatorio; ?>" readonly>
            </div>
            <div class="col-md-3 mt-1">
                <input class="form-control" type="text" value="<?php echo $data['municipio']; ?>" readonly>
            </div>
            <div class="col-md-6 mt-1">
                <input class="form-control" name="aprendiz[]" type="text" value="<?php echo  $aleatorioA; ?>">
            </div>
        </div>
<?php
        $cont18++;
    }
}
?>