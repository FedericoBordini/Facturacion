<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../include/init.php");

if( isset($_POST['numero']) ){
    $numero=$_POST['numero'];
    $cliente_id=$_POST['cliente_id'];
    $query="INSERT INTO facturas (numero,cliente_id) VALUES ('$numero','$cliente_id')";
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
?>
<form method=post>
    Numero: <input type=text name=numero required><br><br>
    Cliente: <?php drop_down("cliente_id","clientes","id","nombre")?><br><br>
    <input type="submit" value="Agregar">
</form>
<?php
}
include("../include/close.php");
?>