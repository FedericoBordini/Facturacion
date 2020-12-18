<a href="agregar.php">Agregar Empresas</a>
<a href="../index.php">Volver al inicio</a>
<table border="1">
    <tr>
        <td>Nombre</td>
        <td>Cuil/cuit</td>
        <td>Modificar</td>
        <td>Borrar</td>
    </tr>
    
<?php
    $query="SELECT * FROM empresas ORDER BY nombre";
    $res=mysqli_query($link , $query);
 
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['cuilcuit']."</td>";
            echo "<td align=center><a href='modificar.php?id=".$row['id']."'>X</a></td>";
            echo "<td align=center><a href='borrar.php?id=".$row['id']."'>X</a></td>";
        echo "</tr>";
    }
    mysqli_free_result($res);
?>
</table>