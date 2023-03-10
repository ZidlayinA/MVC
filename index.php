<?php 
session_start();
require_once 'cdn.html';
require_once 'cnn.php'; 

//se verifica si se presiona el botón llamado validar
if (isset($_POST['buscar']))
{
  //se guarda en las variables$us y $ps
  $hashed_user=$_POST['usuario'];
  $hashed_pass=$_POST['contrasena'];
  $hashed_fecha=$_POST['fecha'];


  $hashed_pass = hash('sha3-512', $contrasena);
  $hashed_user = md5($usuario);
  $hashed_fecha = sha1($fecha);
  
  //Query de consulta
  $query = $cnnPDO->prepare('SELECT * from usuarios WHERE usuario =:usuario and contrasena =:contrasena');

  //Manejo de parámetros
  $query->bindParam(':usuario', $hashed_user);
  $query->bindParam(':contrasena', $hashed_pass);
  

  //Execución del query
  $query->execute(); 
  $count=$query->rowCount();
  

  if ($count) {
  	$_SESSION['usuario']=$hashed_user;
  	$_SESSION['contrasena']=$hashed_pass;
  	header("Location:home.php");
  } else {
  	echo "Correo Electrónico y/o Contraseña incorrectos. Verifíquelo de nuevo";
  }

  //Asigna los datos del registro a la variable $campo
  $campo = $query->fetch();
  
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Criptografía</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> </script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>
	<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
</head>

<body>
	<div class="container" > 
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<form action="" method="post"  class="box"> 
					<h1>Iniciar Sesión</h1>
					<p class="text-muted"> Introduce tu usuario, Fecha de Cumpleaños y Contraseña</p>
					<input type="text" name="usuario" placeholder="Usuario" value="<?php if (isset($_POST['buscar'])) echo $campo['usuario'] ?>">
					<input type="text" name="fecha" placeholder="Fecha de Cumpleaños" value="<?php if (isset($_POST['buscar'])) echo $campo['fecha'] ?>">
					<input type="password" name="contrasena" placeholder="Contraseña" value="<?php if (isset($_POST['buscar'])) echo $campo['contrasena'] ?>">
					<br>
					<input type="submit" name="buscar" id="buscar" value="Iniciar Sesión">
					
					<div class="col-md-12">
						<a href="registro.php" class="icoFacebook" title="Facebook">Crear una cuenta nueva</a>
					</div> 
					</form> 
				</div> 
			</div>
		</div>
	</div>
</body>
</html>
