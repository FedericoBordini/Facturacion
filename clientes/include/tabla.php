<a href="agregar.php">Agregar Cliente</a>
<table border="1">
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Documento</td>
        <td>Modificar</td>
        <td>Borrar</td>
    </tr>
    
<?php
    $query="SELECT * FROM clientes ORDER BY nombre";
    $res=mysqli_query($link , $query);
 
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['apellido']."</td>";
            echo "<td>".$row['documento']."</td>";
            echo "<td align=center><a href='modificar.php?id=".$row['id']."'>X</a></td>";
            echo "<td align=center><a href='borrar.php?id=".$row['id']."'>X</a></td>";
        echo "</tr>";
    }
    mysqli_free_result($res);
?>
</table>