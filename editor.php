<?php 
    require 'views/session.php';
    if(isset($_SESSION['usuario'])){
    require_once 'views/header.php'; 
?>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Escritorio | Editor</h1>
            <p>Bienvenido a la plataforma</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="editor.php">Editor</a></li>
        </ul>
    </div>
    <?php 
        switch($rol_persona){
            case 'Administrador':
                require_once 'views/view.admin/admin.editor.php';
            break;
            default:
                require_once 'blank-page.html';
            break;
        }    
    ?>
<?php 
    require_once "views/footer.php"; 
    }else{
        require_once '404.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>