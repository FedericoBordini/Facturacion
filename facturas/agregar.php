<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../include/init.php");

if( isset($_POST['numero']) ){
    $numero=$_POST['numero'];
    $query="INSERT INTO facturas (numero) VALUES ('$numero')";
    echo $query;
    mysqli_query($link , $query);
    include("include/tabla.php");
}
else{
?>
<form method=post>
    Numero: <input type=text name=numero required><br><br>
    <input type="submit" value="Agregar">
</form>
<?php
}
include("../include/close.php");
?>