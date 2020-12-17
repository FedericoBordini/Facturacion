<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../include/init.php");

if( isset($_POST['nombre']) ){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $documento=$_POST['documento'];
    $query="INSERT INTO clientes (nombre,apellido,documento) VALUES ('$nombre','$apellido','$documento')";
    echo $query;
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
?>
<form method=post>
    Nombre: <input type=text name=nombre required><br><br>
    Apellido: <input type=text name=apellido required><br><br>
    Documento: <input type=text name=documento required><br><br>
    <input type="submit" value="Agregar">
</form>
<?php
}
include("../include/close.php");
?>