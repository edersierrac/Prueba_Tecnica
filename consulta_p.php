<?php
require 'conexion.php';
$were='';
$listar = "SELECT * FROM proveedores";
$resultado = mysqli_query($conexion,$listar);

?>