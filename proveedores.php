
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <table class="table">
     <tr>
         <th scope="col">Tipo de identidad</th>
         <th scope="col">ID</th>
         <th scope="col">Razon social</th>
         <th scope="col">Direccion</th>
         <th scope="col">Nombre de contacto</th>
         <th scope="col">Numero de celular</th>
     </tr>
     <?php
     include('consulta_p.php');
     foreach ($query as $row){?>
     <tr>
       <td><?php echo $row['T_ID'];?></td>
       <td><?php echo $row['ID'];?></td>
       <td><?php echo $row['R_social'];?></td>
       <td><?php echo $row['Dir'];?></td>
       <td><?php echo $row['Nom_contacto'];?></td>
       <td><?php echo $row['Cel_contacto'];?></td>
     </tr>

<?php
     }
?>

    </table>
</body>

</html>