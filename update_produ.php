<?php


require 'conexion.php';




    $codprod = $_POST['codpro'];
    $nompro = $_POST['nompro'];
    $despro = $_POST['despro'];
    $estpro = $_POST['estpro'];
    $nomlpro = $_POST['nomlpro'];
    





    $sql="UPDATE producto SET Cod_p='$codprod', Nom_p='$nompro', Desc_p='$despro', Estado_p='$estpro', Noml_p='$nomlpro ' WHERE Cod_p=' $codprod'";
    $updateprod= $conexion->query($sql);
    
    if($updateprod) { 
        
        echo '<script language="javascript">alert("Producto actualizado correctamente");window.location.href="Productos.php"</script>';
      } else { 
        
       echo '<script language="javascript">alert("error al actualizar Producto");window.location.href="productos.php"</script>';
    
       }



?>