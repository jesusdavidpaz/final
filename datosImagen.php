<?php
//se reciben los datos de la imagen
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamano_imagen=$_FILES['imagen']['size'];
//imprime la imagen echo $tamano_imagen=$_FILES['imagen']['size'];

if($tamano_imagen<=3000000){
    if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){
//ruta carpeta destino del servidor
echo $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/intranet/upload/';
//se mueve la imagen de la carpeta temporal al directorio escogido
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
    }else{
        echo "Solo se puede subir imagenes con formato jpeg,jpg,png,gif";
}
}else{
    echo "el tamaño es demasiado grande";
}
//include "conexion.php";
require_once "conexion.php";
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(!$conexion){

    echo"fallo la conexion";
    exit();
}
$insertar="insert into prueba (nombre,imagen) values ('david','$nombre_imagen')";
$resultado=mysqli_query($conexion,$insertar);
?>