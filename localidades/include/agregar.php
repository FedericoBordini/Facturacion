<?php include("include/init.php");

if( isset($_POST['nombre']) ){
    $nombre=$_POST['nombre'];
    $query="INSERT INTO usuarios (nombre) VALUES ('$nombre')";
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
?>
<form method=post>
    Nombre: <input type=text name=nombre required><br><br>
    <input type="submit" value="Agregar">
</form>
<?php
}
include("include/close.php");
?>