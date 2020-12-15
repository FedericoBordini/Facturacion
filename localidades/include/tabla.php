<a href="agregar.php">Agregar Localidad</a>
<table border="1">
    <tr>
        <td>Nombre</td>
    </tr>
    
<?php
    $query="SELECT * FROM localidades ORDER BY nombre";
    $res=mysqli_query($link , $query);

    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td align=center><a href='modificar.php?id=".$row['id']."'>X</a></td>";
            echo "<td align=center><a href='borrar.php?id=".$row['id']."'>X</a></td>";
        echo "</tr>";
    }
    mysqli_free_result($res);
?>
</table>