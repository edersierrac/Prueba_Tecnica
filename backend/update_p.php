<?php


require 'conexion.php';




$documento = $_POST['tipodocumento'];
$niden = $_POST['nunid'];
$rsocial = $_POST['nsocial'];
$dir = $_POST['dir'];
$noncon = $_POST['noncon'];
$nuncon = $_POST['nuncon'];





$sql="UPDATE proveedores SET T_ID='$documento', ID='$niden', R_social='$rsocial', Dir='$dir', Nom_contacto='$noncon', Cel_contacto='$nuncon' WHERE ID='$niden'";
$updatep= $conexion->query($sql);

if($updatep) { 
    
    echo '<script language="javascript">alert("Proveedor actualizado correctamente");window.location.href="../proveedores.php"</script>';
  } else { 
    
   echo '<script language="javascript">alert("error al actualizar");window.location.href="../proveedores.php"</script>';

   }




?>