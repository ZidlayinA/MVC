<?php 
session_start();
require_once 'cdn.html';
require_once 'cnn.php'; 

//Código de Registro
     //Valida que el usuario hizo clik en el Boton 
    if (isset($_POST['enviar'])) 
    {
    //Trae datos del formulario
    $hashed_user=$_POST['usuario'];
    $hashed_fecha=$_POST['fecha'];
    $hashed_pass=$_POST['contrasena'];

	$hashed_pass = hash('sha3-512', $contrasena);
	$hashed_user = md5($usuario);
	$hashed_fecha = sha1($fecha);

        //Validar que las cajas no esten vacias
        if (!empty($hashed_user) && !empty($hashed_fecha) && !empty($hashed_pass))
            {
              //Insertar datos en la tabla de la db  
              $sql=$cnnPDO->prepare("INSERT INTO usuarios
                (usuario, fecha, contrasena) VALUES (:usuario, :fecha, :contrasena)");

              //Asignar las variables a los campos de la tabla
              $sql->bindParam(':usuario',$hashed_user);
              $sql->bindParam(':fecha',$hashed_fecha);
              $sql->bindParam(':contrasena',$hashed_pass);
             
			


              //Ejecutar la variable $sql
              $sql->execute();
              unset($sql);
              unset($cnnPDO);
			  header("Location:index.php");
            }
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
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<form action="" method="post" class="box">
					<h1>Registro de datos</h1>
					<input type="text" name="usuario" placeholder="Usuario" value="<?php if (isset($_POST['buscar'])) echo $campo['usuario'] ?>">
					<input type="text" name="fecha" placeholder="Fecha de cumpleaños" value="<?php if (isset($_POST['buscar'])) echo $campo['fecha'] ?>">
					<input type="password" name="contrasena" placeholder="Contraseña" value="<?php if (isset($_POST['buscar'])) echo $campo['contrasena'] ?>">
					<br>
					<input type="submit" name="enviar" id="enviar" value="Registrar Información">
					
					</form> 
				</div> 
			</div>
		</div>
	</div>
</body>
</html>
