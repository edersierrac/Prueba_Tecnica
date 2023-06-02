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

$sql="INSERT INTO Recepcion_p (Fecha_re,Producto_re,Prov_re,Idp_re,Numf_re,Can_re,Lote_re,Invima_re,Fechav_re,Descrip_re) VALUES ('$fecha','$producto','$proveeddor','$idproveedor',' $nunf','$can','$lote',' $reinv','$fechav','$descrip')";
$inserrecep= $conexion->query($sql);

 if($inserrecep) { 
    
echo '<script language="javascript">alert("El producto se a guardado correctamente");window.location.href="receppro.php"</script>';
   } else { 
     
    echo '<script language="javascript">alert("error al guardar el producto");window.location.href="receppro.php"</script>';

    }



?>