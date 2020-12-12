<?php include("include/init.php");

if( isset($_POST['nombre']) ){
    $nombre=$_POST['nombre'];
    $dni=$_POST['cuil/cuit'];
    $query="INSERT INTO usuarios (nombre,cuil/cuit) VALUES ('$nombre','$cuil/cuit')";
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
?>
<form method=post>
    Nombre: <input type=text name=nombre required><br><br>
    Cuil/Cuit: <input type=text name=cuil/cuit required><br><br>
    <input type="submit" value="Agregar">
</form>
<?php
}
include("include/close.php");
?>