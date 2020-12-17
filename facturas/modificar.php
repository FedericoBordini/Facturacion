<?php include("../include/init.php");

if( isset($_POST['numero']) ){
    $id=$_POST['id'];
    $numero=$_POST['numero'];
    $query="UPDATE facturas SET numero='$numero' WHERE id='$id'";
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

?>
<form method=post>
    Numero: <input type=text name=numero value='<?php echo $numero; ?>' required><br><br>
    <input type=hidden name=id value='<?php echo $id; ?>' required>
    <input type=submit value="Modificar">
</form>
<?php
}
include("../include/close.php");
?>