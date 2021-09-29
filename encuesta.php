<?php 
    require 'views/session.php';
    if(isset($_SESSION['usuario'])){
    require_once 'views/header.php'; 
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Escritorio | Vista encuestas</h1>
            <p>Bienvenido a la plataforma</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="encuesta.php">Encuestas</a></li>
        </ul>
    </div>
    <div class="row">
        <!--<div class="col-md-8 mx-auto">
            <iframe id="formulario" src="https://docs.google.com/forms/d/e/1FAIpQLSffr-1YclC_vtXDfzszZkWqTVRgOt5VqQxdCMuJKZjCz5zg0w/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </div>-->
        <div class="col-md-6 mx-auto" id="content__encuesta">
            <div class="tile tile-border-top">
                <h4 class="title">Para responder la encuesta sera redireccionado a GOOGLE FORMS.</h3>
                    <p style="font-size: 18px;">La encuesta esta distribuida en 4 perspectivas, cada una con sus respectivas preguntas que se deben contestar de manera correcta, agradecemos su tiempo y colaboración.</p>
                    <hr>
                    <p style="font-size: 18px;"><b>Importante:</b> Una vez termine la encuesta realizada al micro empresario, no olvide ingresar a la plataforma y cambiar el estado ha TERMINAR</p>
                    <a class="btn btn-primary" href="https://forms.gle/An3ow9Gs2kpSqzeK8" title="Respuestas encuesta" target="_blank">Responder encuesta</a>
            </div>
        </div>
    </div>
</main>
<?php 
    require_once "views/footer.php"; 
    }else{
        require_once '404.php';
    }
?>