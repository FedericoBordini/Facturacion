<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../include/init.php");


if( isset($_POST['nombre']) ){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $documento=$_POST['documento'];
    $empresa_id=$_POST['empresa_id'];
    $localidad_id=$_POST['localidad_id'];
    $query="INSERT INTO clientes (nombre,apellido,documento,empresa_id,localidad_id) VALUES ('$nombre','$apellido','$documento','$empresa_id','$localidad_id')";
    
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
?>
<form method=post>
    Nombre: <input type=text name=nombre required><br><br>
    Apellido: <input type=text name=apellido required><br><br>
    Documento: <input type=text name=documento required><br><br>
    Empresa: <?php drop_down("empresa_id","empresas","id","nombre") ?><br><br>
    Localidad: <?php drop_down("localidad_id","localidades","id","nombre") ?><br><br>
    <input type="submit" value="Agregar">
</form>
<?php
}
include("../include/close.php");
?>