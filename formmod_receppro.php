<?php


require 'conexion.php';

 
$nunf = $_GET['Numf'];



$sql = "SELECT * FROM recepcion_p WHERE Numf_re ='$nunf' ";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
	

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>proveedores</title>

    <link 
    href= 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js/>
        <script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	

   <!-- Fontfaces CSS-->
   <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>


<body>

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <div class="top_contact-container">
          <div class="tel_container">
     
          </div>
          
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              Farmedic
            </span>
          </a>
        
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
   

    
    
    <!-- DATA TABLE -->
    <div class="container-fluid">
    <div class="container-fluid">
    

    <figure class="text-center">
    <blockquote class="blockquote">
    <p><h3>MODIFICAR RECEPCION</h3></p>
     </blockquote>
    <figcaption class="blockquote-footer">
     <cite title="Título fuente">Farmedic</cite>
      </figcaption>
     </figure>
    
    </div>
    
     <div class="container">
      
        
      <form form method="post" action="backend/update_receppro.php">
       <div class="form-group  row">
           <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Fecha y hora de recepcion </label>
           <div class="col-sm-8 ">
           <input type="datetime" readonly  class="form-control" id="fecha" name="fecha" value="<?php echo $row['Fecha_re']; ?>"  >
           </div>
      </div >
                 <div class="form-group row">
                 <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Producto</label>
                 <div class="col-sm-8 ">
                 <input type="text" class="form-control" id="prod" name="prod" placeholder="Producto"  value="<?php echo $row['Producto_re']; ?>"  required>
                 </div>
                </div>

                <div class="form-group row">
                 <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Proveedor</label>
                 <div class="col-sm-8">
                 <input type="text" class="form-control" id="proov" name="proov" placeholder="Proveedor" value="<?php echo $row['Prov_re']; ?>"  required>
                 </div>
                </div>

                <div class="form-group row">
                 <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ID proveedor </label>
                 <div class="col-sm-8">
                 <input type="number" class="form-control" id="idpro" name="idpro" placeholder="ID proveedor" value="<?php echo $row['Idp_re']; ?>"  required>
                 </div>
                </div>

                <div class="form-group row">
                 <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Numero de factura</label>
                 <div class="col-sm-8">
                 <input type="number" class="form-control" id="nunf" name="nunf" placeholder="Numero de factura" value="<?php echo $row['Numf_re']; ?>"  required>
                 </div>
                </div>

                <div class="form-group row">
                 <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Cantidad</label>
                 <div class="col-sm-8">
                 <input type="number" class="form-control" id="cant" name="cant" placeholder="Cantidad" value="<?php echo $row['Can_re']; ?>"  required>
                 </div>
                </div>

                <div class="form-group row">
                 <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Lote</label>
                 <div class="col-sm-8">
                 <input type="text" class="form-control" id="lot" name="lot" placeholder="Lote" value="<?php echo $row['lote_re']; ?>"  required>
                 </div>
                 </div>
                

                <div class="form-group row">
                 <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Registro INVIMA</label>
                 <div class="col-sm-8">
                 <input type="text" class="form-control" id="regivi" name="regivi" placeholder="Registro INVIMA" value="<?php echo $row['Invima_re']; ?>"  required>
                 </div>
                 </div>


               <div class="form-group row">
                 <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Fecha de vencimiento</label>
                 <div class="col-sm-8">
                 <input type="date" class="form-control" id="fechav" name="fechav" placeholder="Fecha de vencimiento" value="<?php echo $row['Fechav_re']; ?>"  required>
                 </div>
               </div>


                <div class="form-group row">
                 <label  for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Descripciopn del estado del producto</label>
                 
                 <div class="col-sm-8">
                 <textarea class="form-control" id="descrip" name="descrip" rows="3"  > <?php echo $row['Descrip_re']?></textarea>
                 </div>
                </div>
  
                  
       


  <a href="receppro.php" class="btn btn-primary">Regresar</a>	
  <button type="submit" class="btn btn-success">Modificar</button>
</form>

       </div>


    </div>

<footer_section>
</div >
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023  Design by pepitoplus
      
    </p>
  </section>

</footer_section>

		
			


</body>

</html>