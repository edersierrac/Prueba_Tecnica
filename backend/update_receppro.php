<?php


require 'conexion.php';




    $fecha = $_POST['fecha'];
    $producto = $_POST['prod'];
    $proveeddor = $_POST['proov'];
    $idproveedor= $_POST['idpro'];
    $nunf = $_POST['nunf'];
    $can = $_POST['cant'];
    $lote = $_POST['lot'];
    $reinv = $_POST['regivi'];
    $fechav = $_POST['fechav'];
    $descrip = $_POST['descrip'];


$sql="UPDATE Recepcion_p SET Fecha_re='$fecha', Producto_re	='$producto', Prov_re='$proveeddor', Idp_re='$idproveedor', Numf_re='$nunf', Can_re=' $can ',lote_re='$lote' ,Invima_re='$reinv' ,Fechav_re='$fechav' ,Descrip_re='$descrip'  WHERE Numf_re='$nunf'";
$updatep= $conexion->query($sql);

if($updatep) { 
    
    echo '<script language="javascript">alert("Informacion de recepcion del producto modificado correctamente");window.location.href="../receppro.php"</script>';
  } else { 
    
   echo '<script language="javascript">alert("error al modificar");window.location.href="../receppro.php"</script>';

   }




?>