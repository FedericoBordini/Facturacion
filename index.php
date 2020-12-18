<a href="articulos">Articulos</a><br>
<a href="clientes">Clientes</a><br>
<a href="empresas">Empresas</a><br>
<a href="facturas">Facturas</a><br>
<a href="localidades">Localidades</a><br><br>

<table border="1">
    <tr>
        <td>Numero factura</td>
        <td>Total</td>
    </tr>
<?php 
include("include/init.php");
$query = "SELECT SUM(a.precio_unitario*a.unidades) as total,f.numero FROM facturas f INNER JOIN articulos a ON a.factura_id=f.id GROUP BY f.id";
$res=mysqli_query($link , $query);
while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
            echo "<td>".$row['numero']."</td>";
            echo "<td>".$row['total']."</td>";
        echo "</tr>";
}
?></table>
<?php
mysqli_free_result($res);
include("include/close.php");
?>