<?php
require 'conexion.php';

$listar = "SELECT * FROM proveedores";
$query =mysqli_query($conexion,$listar);

?>