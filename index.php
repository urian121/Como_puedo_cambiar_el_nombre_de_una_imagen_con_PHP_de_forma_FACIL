<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="shortcut icon" href="logo-mywebsite-urian-viera.svg"/>

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="css/material.min.css" rel="stylesheet">
    <style type="text/css">
      .btn-flotante {
      font-size: 16px; 
      text-transform: uppercase; 
      font-weight: bold; 
      color: #ffffff; 
      border-radius: 5px; 
      letter-spacing: 2px; 
      background-color: #cecece; 
      padding: 5px; 
      position: fixed;
      bottom: 40px;
      right: 40px;
      transition: all 300ms ease 0ms;
      box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
      z-index: 99;
    }
    .btn-flotante:hover {
      background-color: #2c2fa5; /* Color de fondo al pasar el cursor */
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
      transform: translateY(-7px);
    }
    </style>
    <title>Cómo puedo cambiar el nombre de una imagen con PHP de forma FÁCIL :: Webdeveloper Urian Viera </title>
  </head>
  <body>

<nav class="navbar navbar-light" style="background-color: #55468c !important;">
  <a class="navbar-brand" href="#">
   <strong style="color: #fff">WebDeveloper</strong>
  </a>
</nav>

<div class="container mt-5"> 

  <h3 class="text-center mb-5">
    Cómo puedo cambiar el nombre de una imágen con PHP de forma <strong>FÁCIL</strong> 
    <hr>
  </h3>


<form name="MiForm" action="recibe_img.php" method="POST" enctype="multipart/form-data">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombreCliente">Nombre Completo</label>
      <input type="text" name="nombreCliente" class="form-control">
    </div>

    <div class="form-group col-md-6">
    <div class="input-group mt-3">
        <div class="custom-file">
            <input type="file" name="imagenCliente" class="custom-file-input">
            <label class="custom-file-label" for="imagenCliente">Adjuntar Imágen (Factura)</label>
        </div>
    </div>
    </div>
</div>

  <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar Imagen</button>
</form>



<a href="#" class="btn-flotante">
  <img src="perfil.jpeg" style="width: 50px;" class="img-fluid">
</a>

</div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <script src="js/material.min.js"></script>

  </body>
</html>
