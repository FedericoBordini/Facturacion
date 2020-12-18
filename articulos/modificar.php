<?php include("../include/init.php");

if( isset($_POST['nombre']) ){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $unidades=$_POST['unidades'];
    $precio_unitario=$_POST['precio_unitario'];
    $factura_id=$_POST['factura_id'];
    $query="UPDATE articulos SET nombre='$nombre',unidades='$unidades', precio_unitario='$precio_unitario', factura_id='$factura_id' WHERE id='$id'";
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
    $id=$_GET['id'];
    $query = "SELECT * FROM articulos WHERE id=$id";
    $res=mysqli_query($link , $query);
    $row = mysqli_fetch_array($res);
    $id=$row['id'];
    $nombre=$row['nombre'];
    $unidades=$row['unidades'];
    $precio_unitario=$row['precio_unitario'];
    $factura_id=$row['factura_id'];

?>
<form method=post>
    Nombre: <input type=text name=nombre value='<?php echo $nombre; ?>' required><br><br>
    Unidades: <input type=text name=unidades value='<?php echo $unidades; ?>' required><br><br>
    Precio Unitario: <input type=text name=precio_unitario value='<?php echo $precio_unitario; ?>' required><br><br>
    Factura: <?php drop_down("factura_id","facturas","id","numero",$factura_id)?><br><br>
    <input type=hidden name=id value='<?php echo $id; ?>' required>
    <input type=submit value="Modificar">
</form>
<?php
}
include("../include/close.php");
?>