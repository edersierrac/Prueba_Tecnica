<?php


require 'conexion.php';




    $codprod = $_POST['codpro'];
    $nompro = $_POST['nompro'];
    $despro = $_POST['despro'];
    $estpro = $_POST['estpro'];
    $nomlpro = $_POST['nomlpro'];
    





$sql="INSERT INTO producto (Cod_p,Nom_p,Desc_p,Estado_p,Noml_p) VALUES ('$codprod',' $nompro','$despro','$estpro','$nomlpro')";
$insertp= $conexion->query($sql);

 if($insertp) { 
    
echo '<script language="javascript">alert("Producto guardado correctamente");window.location.href="../productos.php"</script>';
   } else { 
     
    echo '<script language="javascript">alert("error al guardar Producto");window.location.href="../productos.php"</script>';

    }



?>
