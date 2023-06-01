<?php


require 'conexion.php';


$id = $_GET['ID'];

$sql = "SELECT * FROM proveedores WHERE ID ='$id' ";
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
    <br>
    <br>
    <h3 class="title-5 m-b-35">modificar Proveedores</h3>
    </div>
    

      <div class="container">
        
      <form form method="post" action="update_p.php">
       <div class="form-group">
           <label for="exampleInputEmail1">Tipo de identificacion</label>
           <select class="custom-select my-1 mr-sm-2" id="tipodocumento" name="tipodocumento">
                    <option value="Cedula" <?php if($row['T_ID']=='Cedula') echo 'selected'; ?>>Cedula</option>
                    <option value="NIT" <?php if($row['T_ID']=='NIT') echo 'selected'; ?>>NIT</option>
                    <option value="Cedula extrangera" <?php if($row['T_ID']=='Cedula extrangera') echo 'selected'; ?>>Cedula extrangera</option>
                    <option value="NIT extrangera" <?php if($row['T_ID']=='NIT extrangera') echo 'selected'; ?>>NIT de extrangeria</option>
           </select>
          
      </div>
                 <div class="form-group">
                 <label for="exampleInputPassword1">Numero de identificacion</label>
                 <input  type="number" class="form-control" id="nunid" name="nunid" value="<?php echo $row['ID']; ?>" placeholder="Numero de identificacion">
                </div>

                <div class="form-group">
                 <label for="exampleInputPassword1">Nombre o razon social</label>
                 <input type="text" class="form-control" id="nsocial" name="nsocial" value="<?php echo $row['R_social']; ?>" placeholder="Nombre o razon social" required>
                </div>

                <div class="form-group">
                 <label for="exampleInputPassword1">Direccion</label>
                 <input type="text" class="form-control" id="dir" name="dir" value="<?php echo $row['Dir']; ?>" placeholder="Direccion" required>
                </div>

                <div class="form-group">
                 <label for="exampleInputPassword1">Nombre contacto</label>
                 <input type="text" class="form-control" id="noncon" name="noncon" value="<?php echo $row['Nom_contacto']; ?>" placeholder="Nombre contacto" required>
                </div>

                <div class="form-group">
                 <label for="exampleInputPassword1">Numero de contacto</label>
                 <input type="number" class="form-control" id="nuncon" name="nuncon" value="<?php echo $row['Cel_contacto']; ?>" placeholder="Numero de contacto" required>
                </div>
  
  
  <a href="proveedores.php" class="btn btn-primary">Regresar</a>	
  <button type="submit" class="btn btn-success">Modificar</button>
</form>

       </div>


    </div>

    </div>

   
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023  Design by pepitoplus
      
    </p>
  </section>


</body>

</html>