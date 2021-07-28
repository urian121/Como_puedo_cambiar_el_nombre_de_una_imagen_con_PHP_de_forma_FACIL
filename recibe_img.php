<?php
//include('config.php');


//Recibo la foto (Factura)
$filename       = $_FILES['foto']['name'];
$sourceFoto     = $_FILES['foto']['tmp_name'];


$logitudPass  = 10;
$newNameFoto   = substr( md5(microtime()), 1, $logitudPass);

$explode        = explode('.', $filename);
$extension_foto = array_pop($explode);
$nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;

//Verificando si existe el directorio
$dirLocal = "Imagenes_Nuevas";
if (!file_exists($dirLocal)) {
    mkdir($dirLocal, 0777, true);
}

$miDir    = opendir($dirLocal); //Habro el directorio
$urlFactura = $dirLocal.'/'.$nuevoNameFoto;

if(move_uploaded_file($sourceFoto, $urlFactura)){
/*  
  $sqlInsertBD = ("
  INSERT INTO clientesGroomers (
      nameFull,
      typeMascot,
      year,
      phone,
      email,
      groomer_id,
      photo_invoice,
      fecha_registro
    )
  VALUES (
    '$nameFull',
    '$typeMascot',
    '$year',
    '$phone',
    '$email',
    '$idgroomer',
    '$urlFactura',
    '$fecha_registro'
  );");
  $post_data_query = mysqli_query($con, $sqlInsertBD);
  */
}

//@mysqli_close($con); 


?>
