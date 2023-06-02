<?php


require 'conexion.php';




    $documento = $_POST['tipodocumento'];
    $niden = $_POST['nunid'];
    $rsocial = $_POST['nsocial'];
    $dir = $_POST['dir'];
    $noncon = $_POST['noncon'];
    $nuncon = $_POST['nuncon'];





$sql="INSERT INTO proveedores (T_ID,ID,R_social,Dir,Nom_contacto,Cel_contacto) VALUES ('$documento','$niden','$rsocial','$dir','$noncon','$nuncon')";
$insertp= $conexion->query($sql);

 if($insertp) { 
    
echo '<script language="javascript">alert("Proveedor guardado correctamente");window.location.href="../proveedores.php"</script>';
   } else { 
     
    echo '<script language="javascript">alert("error al guardar");window.location.href="../proveedores.php"</script>';

    }



?>

