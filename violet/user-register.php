<!DOCTYPE html>
 <html lang="zxx">

<head>
 <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amazon | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>


    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.php"><img src="img/amazon.png" alt=""></a>
                </div>
                <div class="header-right">
                    <img src="img/icons/search.png" alt="" class="search-trigger">
                    <img src="img/icons/man.png" alt="">
                    <a href="#">
                        <img src="img/icons/bag.png" alt="">
                        <span>2</span>
                    </a>
                </div>
                <div class="user-access">
                    <a href="#">Register</a>
                    <a href="#" class="in">Sign in</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./categories.php">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="product-page.php">Product Page</a></li>
                                <li><a href="shopping-cart.php">Shopping Card</a></li>
                                <li><a href="check-out.php">Check out</a></li>
                                <li><a href="product-register.php">Registrar producto</a></li>
                            </ul>
                        </li>
                        <li><a href="./product-page.php">About</a></li>
                        <li><a href="./check-out.php">Blog</a></li>
                        <li><a class="active" href="./contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Registro<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->



<div class="contact-section">
    <div class="container">
	<div class="row">
      <div class="col-lg-8">
        <form class="contact-form" role="from" action="user-register.php" method="post" autocomplete="off">

        <div class="row">
             <div class="col-lg-6">
                <input type="text" placeholder="Email" name="usuario" required>
             </div>
        
             <div class="col-lg-6">
                <input type="text"  placeholder="Nickname" name="nick" required>
             </div>

             <div class="col-lg-12">
                <input type="text"  placeholder="Nombre" name="nombre" required>
                    <input type="text" placeholder="Apellidos" name="apellidos" required>
                     <input type="text" placeholder="DNI" name="dni" required>
                      <input type="text" placeholder="Calle" name="calle" required>
                       <input type="password" placeholder="Password" name="password" required>
                         <input type="password" placeholder="Confirmar password" name="repassword" required>
             </div>

      </div>

<div class="col-lg-12 text-right"><button type="submit" name="enviar" value="Registrar">Registrar</button></div>
</form>
</div>
</div>


  <?php
	$conexion=new mysqli("bbdd.dlsi.ua.es","gi_amazon",".gi_amazon.","gi_amazon"); 
	
	if($conexion->connect_error){
		die("Conexión Fallida : " . $conexion->connect_error);
	}
if(isset($_POST['enviar'])) { 
    if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '' or $_POST['nick'] == '' or $_POST['nombre'] == ''
    or $_POST['apellidos'] == '' or $_POST['dni'] == '' or $_POST['calle'] == '') { 

        echo 'Por favor llene todos los campos.'; 

    } else { 
        $sql = "SELECT * FROM Usuario
        WHERE email = '$_POST[usuario]' ";

        $rec = $conexion->query($sql); 
        $count = mysqli_num_rows ($rec);

        if($count == 1){
         
         echo 'Este usuario ya ha sido registrado anteriormente.';
		
        }else{

            if($_POST['password'] == $_POST['repassword']) { 
                $usuario = $_POST['usuario']; // email
                $password = $_POST['password']; // contraeña
                $nickn = $_POST['nick']; 
                $nombre_usuario = $_POST['nombre']; 
                $ape = $_POST['apellidos']; 
                $d = $_POST['dni']; 
                $c = $_POST['calle']; 
               


                $sql = "INSERT INTO Usuario (email, nickname, nombre, apellidos, dni, calle, contraseña) VALUES ('$usuario', '$nickn', '$nombre_usuario', '$ape', '$d', '$c', '$password')"; 

                if($conexion->query($sql) == TRUE){

                     echo 'Usted se ha registrado correctamente.';          
				}
                else{

                 echo 'No se ha registrado correctamente.'; 
				}
               
            } else { 
                echo 'Las password no son iguales, intente de nuevo.'; 
            } 
        } 
                 
    } 
}

 mysqli_close($conexion);

 ?>


 </div>
 </div>
 </div>
 
    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="newslatter-form">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="Your email address">
                            <button type="submit">Subscribe to our newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>About us</h4>
                            <ul>
                                <li>About Us</li>
                                <li>Community</li>
                                <li>Jobs</li>
                                <li>Shipping</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Customer Care</h4>
                            <ul>
                                <li>Search</li>
                                <li>Privacy Policy</li>
                                <li>2019 Lookbook</li>
                                <li>Shipping & Delivery</li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Services</h4>
                            <ul>
                                <li>Free Shipping</li>
                                <li>Free Returnes</li>
                                <li>Our Franchising</li>
                                <li>Terms and conditions</li>
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li>Payment methods</li>
                                <li>Times and shipping costs</li>
                                <li>Product Returns</li>
                                <li>Shipping methods</li>
                                <li>Conformity of the products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>
			</div>

<div class="container text-center pt-5">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>


		</div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>





	</body>
</html>

   


  





