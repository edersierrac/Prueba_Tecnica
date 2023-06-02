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
       
    <figure class="text-center">
    <blockquote class="blockquote">
    <p><h3> FORMULARIO PRODUCTOS</h3></p>
     </blockquote>
    <figcaption class="blockquote-footer">
     <cite title="Título fuente">Farmedic</cite>
      </figcaption>
     </figure>

    </div>
    

      <div class="container">
        
      <form form method="post" action="backend/insertar_produ.php">
          
                
                 <div class="form-group">
                 <label for="exampleInputPassword1">Codigo Producto</label>
                 <input type="number" class="form-control" id="codpro" name="codpro" placeholder="Codigo Producto" required>
                </div>

                <div class="form-group">
                 <label for="exampleInputPassword1">Nombre del producto</label>
                 <input type="text" class="form-control" id="nompro" name="nompro" placeholder="Nombre del producto" required>
                </div>

                <div class="form-group">
                 <label for="exampleInputPassword1">Descripcion del producto</label>
                 <textarea class="form-control" id="despro" name="despro" rows="3" require></textarea>
                </div>

                <div class="form-group">
                 <label for="exampleInputPassword1">Estado del producto</label>
                 <input type="text" class="form-control" id="estpro" name="estpro" readonly value="Activo" >
                </div>

                <div class="form-group">
                 <label for="exampleInputPassword1">Nombre del laboratorio</label>
                 <input type="text" class="form-control" id="nomlpro" name="nomlpro" placeholder="Nombre del laboratorio" required>
                </div>
  
  
  <a href="productos.php" class="btn btn-primary">Regresar</a>	
  <button type="submit" class="btn btn-success">Registrar</button>
</form>

       </div>


    </div>

    </div>

</div>
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023  Design by pepitoplus
      
    </p>
  </section>