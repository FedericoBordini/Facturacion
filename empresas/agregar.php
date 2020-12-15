<?php include("../include/init.php");

if( isset($_POST['nombre']) ){
    $nombre=$_POST['nombre'];
    $cuilcuit=$_POST['cuilcuit'];
    $query="INSERT INTO empresas (nombre,cuilcuit) VALUES ('$nombre','$cuilcuit')";
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
?>
<form method=post>
    Nombre: <input type=text name=nombre required><br><br>
    Cuil/Cuit: <input type=text name=cuilcuit required><br><br>
    <input type="submit" value="Agregar">
</form>
<?php
}
include("../include/close.php");
?>