<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once "conexion.php";
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(!$conexion){

    echo"fallo la conexion";
    exit();
}
$consulta="select imagen from prueba where id=9";
$resultado=mysqli_query($conexion, $consulta);

while($fila=mysqli_fetch_array($resultado)){
$ruta_img=$fila["imagen"]; 
}
?>    
<div>
<img src="/intranet/upload/<?php echo $ruta_img; ?>" alt="como" width="25%"/>
</div>
</body>
</html>
