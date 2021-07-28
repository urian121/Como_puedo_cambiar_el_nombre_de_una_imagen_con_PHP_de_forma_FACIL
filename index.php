<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="shortcut icon" href="http://groomersacademy.com.co/wp-content/themes/betheme/images/favicon.ico"/>

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="css/material.min.css" rel="stylesheet">
    <title>Cómo puedo cambiar el nombre de una imagen con PHP de forma FÁCIL :: Webdeveloper Urian Viera </title>
  </head>
  <body>

<nav class="navbar navbar-light" style="background-color: #55468c !important;">
  <a class="navbar-brand" href="#">
    <img src="/material/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>
</nav>

<div class="container mt-5"> 

  <h3 class="text-center mb-5">
    Cómo puedo cambiar el nombre de una imagen con PHP de forma <strong>FÁCIL</strong> 
    <hr>
  </h3>


<form name="MiForm" action="recibe_img.php" method="POST" enctype="multipart/form-data">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nameFull">Nombre Completo</label>
      <input type="text" name="nameFull" class="form-control">
    </div>

    <div class="form-group col-md-6">
    <div class="input-group mt-3">
        <div class="custom-file">
            <input type="file" name="foto" class="custom-file-input" accept="image/*">
            <label class="custom-file-label" for="foto">Adjuntar Imagen (Factura)</label>
        </div>
    </div>
    </div>
</div>

  <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar Imagen</button>
</form>


</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="js/material.min.js"></script>

  </body>
</html>