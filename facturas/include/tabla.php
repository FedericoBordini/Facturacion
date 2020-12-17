<a href="agregar.php">Agregar Factura</a>
<table border="1">
    <tr>
        <td>Numero</td>
        <td>Modificar</td>
        <td>Borrar</td>
    </tr>
    
<?php
    $query="SELECT * FROM facturas ORDER BY numero";
    $res=mysqli_query($link , $query);
 
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
            echo "<td>".$row['numero']."</td>";
            echo "<td align=center><a href='modificar.php?id=".$row['id']."'>X</a></td>";
            echo "<td align=center><a href='borrar.php?id=".$row['id']."'>X</a></td>";
        echo "</tr>";
    }
    mysqli_free_result($res);
?>
</table>