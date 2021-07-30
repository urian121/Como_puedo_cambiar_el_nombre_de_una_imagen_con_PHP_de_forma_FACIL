<?php
/* Conexion a BD */
/*$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "practicas";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");
*/


//$nombreCliente   = $_REQUEST['nombreCliente'];
$filename        = $_FILES['imagenCliente']['name'];
$sourceFoto      = $_FILES['imagenCliente']['tmp_name'];

date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$fecha_imagen   = date("d/m/Y h:i A");

$logitudPass    = 10;
$newNameFoto    = substr( md5(microtime()), 1, $logitudPass);

$explode        = explode('.', $filename);
$extension_foto = array_pop($explode);
$nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;

//Verificando si existe el directorio
$dirLocal = "Imagenes_Nuevas";
if (!file_exists($dirLocal)) {
    mkdir($dirLocal, 0777, true);
}

$miDir         = opendir($dirLocal); //Habro el directorio
$imagenCliente = $dirLocal.'/'.$nuevoNameFoto;

if(move_uploaded_file($sourceFoto, $imagenCliente)){
 /*
  $sqlInsertBD = ("
  INSERT INTO imagenes (
      nombreCliente,
      imagenCliente,
      fecha_imagen
    )
  VALUES (
    '$nombreCliente',
    '$imagenCliente',
    '$fecha_imagen'
  );");
  $post_data_query = mysqli_query($con, $sqlInsertBD);

*/
}
//@mysqli_close($con); 

header("Location:index.php");
?>
