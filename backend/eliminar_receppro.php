<?php


require 'conexion.php';


   $numf = $_GET['Numf'];

   
	$sql = "DELETE FROM Recepcion_p WHERE Numf_re = '$numf'";
	$eliminar = $conexion->query($sql);



    if($eliminar) { 
    
        echo '<script language="javascript">alert("Producto eliminado correctamente");window.location.href="../receppro.php"</script>';
      } else { 
        
       echo '<script language="javascript">alert("error al eliminar producto");window.location.href="../receppro.php"</script>';
   
       }
   


?>