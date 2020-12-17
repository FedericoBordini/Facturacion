<?php include("../include/init.php");

if( isset($_POST['nombre']) ){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $documento=$_POST['documento'];
    $empresa_id=$_POST['empresa_id'];
    $localidad_id=$_POST['localidad_id'];
    $query="UPDATE clientes SET nombre='$nombre',apellido='$apellido', documento='$documento', empresa_id='$empresa_id',localidad_id='$localidad_id' WHERE id='$id'";
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
    $empresa_id=$row['empresa_id'];
    $localidad_id=$row['localidad_id'];

?>
<form method=post>
    Nombre: <input type=text name=nombre value='<?php echo $nombre; ?>' required><br><br>
    Apellido: <input type=text name=apellido value='<?php echo $apellido; ?>' required><br><br>
    Documento: <input type=text name=documento value='<?php echo $documento; ?>' required><br><br>
    Empresa: <?php drop_down("empresa_id","empresas","id","nombre",$empresa_id) ?><br><br>
    Localidad: <?php drop_down("localidad_id","localidades","id","nombre",$localidad_id) ?><br><br>
    <input type=hidden name=id value='<?php echo $id; ?>' required>
    <input type=submit value="Modificar">
</form>
<?php
}
include("../include/close.php");
?>