<a href="agregar.php">Agregar Cliente</a>
<a href="../index.php">Volver al inicio</a>
<table border="1">
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Documento</td>
        <td>Empresa</td>
        <td>Localidad</td>
        <td>Modificar</td>
        <td>Borrar</td>
    </tr>
    
<?php
    $query="SELECT c.id,c.nombre,c.apellido,c.documento,e.nombre as empresa,l.nombre as localidad FROM clientes c LEFT JOIN empresas e ON c.empresa_id=e.id LEFT JOIN localidades l on c.localidad_id=l.id ORDER BY c.nombre";
    $res=mysqli_query($link , $query);
 
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['apellido']."</td>";
            echo "<td>".$row['documento']."</td>";
            echo "<td>".$row['empresa']."</td>";
            echo "<td>".$row['localidad']."</td>";
            echo "<td align=center><a href='modificar.php?id=".$row['id']."'>X</a></td>";
            echo "<td align=center><a href='borrar.php?id=".$row['id']."'>X</a></td>";
        echo "</tr>";
    }
    mysqli_free_result($res);
?>
</table>