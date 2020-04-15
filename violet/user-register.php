<!DOCTYPE html>

 <html lang="zxx">

<head>
 <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Violet | Template</title>

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

<div class="container">
	<div class="panel-body">
        <form class="form-horizontal" role="from" action="user-register.php" method="post" autocomplete="off">

        <div class="form-group">
             <label for="email" class="col-md-3 contol-label">Email:</label>
             <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Email" name="usuario" required>
             </div>
        </div>

        
        <div class="form-group">
             <label for="nick" class="col-md-3 contol-label">Nickname:</label>
             <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Nickname" name="nick" required>
             </div>
        </div>

          
        <div class="form-group">
             <label for="nombre" class="col-md-3 contol-label">Nombre:</label>
             <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
             </div>
        </div>

          
        <div class="form-group">
             <label for="apellidos" class="col-md-3 contol-label">Apellidos:</label>
             <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required>
             </div>
        </div>

          
        <div class="form-group">
             <label for="dni" class="col-md-3 contol-label">DNI:</label>
             <div class="col-md-9">
                <input type="text" class="form-control" placeholder="DNI" name="dni" required>
             </div>
        </div>

          
        <div class="form-group">
             <label for="calle" class="col-md-3 contol-label">Calle:</label>
             <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Calle" name="calle" required>
             </div>
        </div>

          
        <div class="form-group">
             <label for="pass" class="col-md-3 contol-label">Password:</label>
             <div class="col-md-9">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
             </div>
        </div>

          
        <div class="form-group">
             <label for="confirm" class="col-md-3 contol-label">Confirmar password:</label>
             <div class="col-md-9">
                <input type="password" class="form-control" placeholder="Confirmar password" name="repassword" required>
             </div>
        </div>
<div><input type="submit" name="enviar" value="Registrar"></div>
</form>

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
	</body>
</html>

   


  


