<?php


require 'conexion.php';


   $id = $_GET['IDP'];

   
	$sql = "DELETE FROM producto WHERE Cod_p = '$id'";
	$eliminar = $conexion->query($sql);



    if($eliminar) { 
    
     echo '<script language="javascript">alert("Producto eliminado correctamente");window.location.href="../productos.php"</script>';
   } else { 
     
    echo '<script language="javascript">alert("error al eliminar producto");window.location.href="../productos.php"</script>';

    }



?>