<a href="agregar.php">Agregar Articulo</a>
<table border="1">
    <tr>
        <td>Nombre</td>
        <td>Unidades</td>
        <td>Precio Unitario</td>
        <td>Factura</td>
        <td>Modificar</td>
        <td>Borrar</td>
    </tr>
    
<?php
    $query="SELECT a.id,a.nombre,a.precio_unitario,a.unidades,f.numero FROM articulos a LEFT JOIN facturas f on a.factura_id=f.id ORDER BY f.numero";
    $res=mysqli_query($link , $query);
 
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['unidades']."</td>";
            echo "<td>".$row['precio_unitario']."</td>";
            echo "<td>".$row['numero']."</td>";
            echo "<td align=center><a href='modificar.php?id=".$row['id']."'>X</a></td>";
            echo "<td align=center><a href='borrar.php?id=".$row['id']."'>X</a></td>";
        echo "</tr>";
    }
    mysqli_free_result($res);
?>
</table>