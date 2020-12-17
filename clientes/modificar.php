<?php include("../include/init.php");

if( isset($_POST['nombre']) ){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $documento=$_POST['documento'];
    $query="UPDATE clientes SET nombre='$nombre',apellido='$apellido', documento='$documento' WHERE id='$id'";
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
    $id=$_GET['id'];
    $query = "SELECT * FROM clientes WHERE id=$id";
    $res=mysqli_query($link , $query);
    $row = mysqli_fetch_array($res);
    $id=$row['id'];
    $nombre=$row['nombre'];
    $apellido=$row['apellido'];
    $documento=$row['documento'];

?>
<form method=post>
    Nombre: <input type=text name=nombre value='<?php echo $nombre; ?>' required><br><br>
    Apellido: <input type=text name=apellido value='<?php echo $apellido; ?>' required><br><br>
    Documento: <input type=text name=documento value='<?php echo $documento; ?>' required><br><br>
    <input type=hidden name=id value='<?php echo $id; ?>' required>
    <input type=submit value="Modificar">
</form>
<?php
}
include("../include/close.php");
?>