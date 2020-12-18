<a href="agregar.php">Agregar Factura</a>
<a href="../index.php">Volver al inicio</a>
<table border="1">
    <tr>
        <td>Numero</td>
        <td>Cliente</td>
        <td>Modificar</td>
        <td>Borrar</td>
    </tr>
    
<?php
    $query="SELECT f.id,f.numero,c.nombre as cliente FROM facturas f LEFT JOIN clientes c ON f.cliente_id=c.id ORDER BY numero";
    $res=mysqli_query($link , $query);
 
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
            echo "<td>".$row['numero']."</td>";
            echo "<td>".$row['cliente']."</td>";
            echo "<td align=center><a href='modificar.php?id=".$row['id']."'>X</a></td>";
            echo "<td align=center><a href='borrar.php?id=".$row['id']."'>X</a></td>";
        echo "</tr>";
    }
    mysqli_free_result($res);
?>
</table>