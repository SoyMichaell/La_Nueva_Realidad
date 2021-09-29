<h3 class="tile">ESPACIO DE ESCRITURA</h3>
<?php
    /*Toma el total de publicaciones de la tabla*/
    $consultaPublicacion = $conexion->prepare("SELECT * FROM editor");
    $consultaPublicacion->execute();
    $resultado = $consultaPublicacion->rowCount();
    /*Fin*/
?>
    <div class="d-flex justify-content-end">
        <a class="btn btn-info" href="publicaciones.php"><i class="fa fa-eye"></i> Ver publicaciones (<?php echo $resultado; ?>)</a>
        <input  style="margin-left: 10px;" class="btn btn-primary"  type="button" value="Publicar" onclick="jsGuardar()">
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <!--Contenedor de espacio de escritura este se muestra por medio del id del content desde el js-->
            <div class="tile" id="editor"></div>
            <!--Fin contenedor-->
        </div>
    </div>
</main>
<!--JS quilljs el cual nos permite vincular un espacio de escritura agradable-->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<!--Js este contiene las opciones con las que cuenta el espacio de escritura, se muestra desde el id, funcion guardar la cual redirecciona a un archivo.php
donde se envia la informacion a la BD-->
<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote', 'code-block'],

        [{
            'header': 1
        }, {
            'header': 2
        }], // custom button values
        [{
            'list': 'ordered'
        }, {
            'list': 'bullet'
        }],
        [{
            'script': 'sub'
        }, {
            'script': 'super'
        }], // superscript/subscript
        [{
            'indent': '-1'
        }, {
            'indent': '+1'
        }], // outdent/indent
        [{
            'direction': 'rtl'
        }], // text direction

        [{
            'size': ['small', false, 'large', 'huge']
        }], // custom dropdown
        [{
            'header': [1, 2, 3, 4, 5, 6, false]
        }],

        [{
            'color': []
        }, {
            'background': []
        }], // dropdown with defaults from theme
        [{
            'font': []
        }],
        [{
            'align': []
        }],

        ['clean'] // remove formatting button
    ];

    var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });
    function jsGuardar() {
        let contenido = (quill.container.firstChild.innerHTML);
        fetch('controller/guardar.php?contenido=' + contenido);
        alert('Se ha guardado');
        location.reload();
    }
</script>