<?php 
include("../include/init.php");
$id = $_GET['id'];
$query = "DELETE FROM clientes WHERE id=$id";
mysqli_query($link , $query);
include("include/tabla.php");
include("../include/close.php");
?>