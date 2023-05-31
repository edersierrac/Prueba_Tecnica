
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
    <h3 class="title-5 m-b-35">Informacion de Proveedores</h3>
    <div class="table-data__tool">
       
        <div class="table-data__tool-right">
            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>add item</button>
            
        </div>
    </div>


    <div class="table-responsive table-responsive-data2">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    
                    <th scope="col">Tipo de identidad</th>
                    <th scope="col">ID</th>
                    <th scope="col">Razon social</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Nombre de contacto</th>
                    <th scope="col">Numero de celular</th>
                    <th scope="col" colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                     <?php
                        include('consulta_p.php');
                         while($row = mysqli_fetch_array($resultado)){?>
                        <tr>
                                 <td class="table-light"><?php echo $row['T_ID'];?></td>
                                 <td class="table-light"><?php echo $row['ID'];?></td>
                                 <td class="table-light"><?php echo $row['R_social'];?></td>
                                 <td class="table-light"><?php echo $row['Dir'];?></td>
                                 <td class="table-light"><?php echo $row['Nom_contacto'];?></td>
                                 <td class="table-light"><?php echo $row['Cel_contacto'];?></td>
                                 <td class="table-light"><a href="modificarp.php?ID=<?php echo $row['ID'];?>"><i class="zmdi zmdi-edit"></i></a></td>
                                 <td class="table-light"><a href="#" data-href="eliminarp.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('¿Realmente desea eliminar el usuario?')"><i class="zmdi zmdi-delete"></i></td>
                                 
                        </tr>
                    <?php } ?>
                
            </tbody>

       
        </table>
    </div>
    <!-- END DATA TABLE -->

    </div>

    </div>

   
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023  Design by pepitoplus
      
    </p>
  </section>

   

		
			


</body>

</html>