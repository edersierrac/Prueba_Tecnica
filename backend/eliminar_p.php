<?php


require 'conexion.php';


   $id = $_GET['ID'];

   
	$sql = "DELETE FROM proveedores WHERE ID = '$id'";
	$eliminar = $conexion->query($sql);



    if($eliminar) { 
    
     echo '<script language="javascript">alert("Proveedor eliminado correctamente");window.location.href="../proveedores.php"</script>';
   } else { 
     
    echo '<script language="javascript">alert("error al eliminar");window.location.href="../proveedores.php"</script>';

    }



?>