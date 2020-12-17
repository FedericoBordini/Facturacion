<!-- lo unico que hace es cerrar la coneccion  -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("funcs.php");
$link = mysqli_connect("localhost:3306", "root", "root", "facturacion");
?>  
<html>
<head></head>

<body>

