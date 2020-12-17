<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../include/init.php");

if( isset($_POST['nombre']) ){
    $nombre=$_POST['nombre'];
    $unidades=$_POST['unidades'];
    $precio_unitario=$_POST['precio_unitario'];
    $query="INSERT INTO articulos (nombre,unidades,precio_unitario) VALUES ('$nombre','$unidades','$precio_unitario')";
    echo $query;
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
?>
<form method=post>
    Nombre: <input type=text name=nombre required><br><br>
    Unidades: <input type=text name=unidades required><br><br>
    Precio Unitario: <input type=text name=precio_unitario required><br><br>
    <input type="submit" value="Agregar">
</form>
<?php
}
include("../include/close.php");
?>