<?php include("../include/init.php");

if( isset($_POST['nombre']) ){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $cuilcuit=$_POST['cuilcuit'];
    $query="UPDATE empresas SET nombre='$nombre',cuilcuit='$cuilcuit' WHERE id='$id'";
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
    $id=$_GET['id'];
    $query = "SELECT * FROM empresas WHERE id=$id";
    $res=mysqli_query($link , $query);
    $row = mysqli_fetch_array($res);
    $id=$row['id'];
    $nombre=$row['nombre'];
    $cuilcuit=$row['cuilcuit'];

?>
<form method=post>
    Nombre: <input type=text name=nombre value='<?php echo $nombre; ?>' required><br><br>
    cuil/cuit: <input type=text name=cuilcuit value='<?php echo $cuilcuit; ?>' required><br><br>
    <input type=hidden name=id value='<?php echo $id; ?>' required>
    <input type=submit value="Modificar">
</form>
<?php
}
include("../include/close.php");
?>