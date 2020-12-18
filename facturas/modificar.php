<?php include("../include/init.php");

if( isset($_POST['numero']) ){
    $id=$_POST['id'];
    $numero=$_POST['numero'];
    $cliente_id=$_POST['cliente_id'];
    $query="UPDATE facturas SET numero='$numero',cliente_id='$cliente_id' WHERE id='$id'";
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
    $id=$_GET['id'];
    $query = "SELECT * FROM facturas WHERE id=$id";
    $res=mysqli_query($link , $query);
    $row = mysqli_fetch_array($res);
    $id=$row['id'];
    $numero=$row['numero'];
    $cliente_id=$row['cliente_id'];

?>
<form method=post>
    Numero: <input type=text name=numero value='<?php echo $numero; ?>' required><br><br>
    Cliente: <?php drop_down("cliente_id","clientes","id","nombre",$cliente_id)?><br><br>
    <input type=hidden name=id value='<?php echo $id; ?>' required>
    <input type=submit value="Modificar">
</form>
<?php
}
include("../include/close.php");
?>