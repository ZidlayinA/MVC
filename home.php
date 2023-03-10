<?php 
session_start();
require_once 'cdn.html';
require_once 'cnn.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
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
	<form action="" method="post">
		<nav class="navbar" style="background-color: whitesmoke;">
			
			<a class="btn" href="cerrar.php" ><strong>Cerrar Sesión</strong></a>
		</nav>

		<div class="container-fluid p-5">
			<div class="card-deck">
				<div class="card">
					<div class="card-body">
						<embed src="unidad_2.pdf" type="application/pdf" width="100%" height="600px" />
					</div>
				</div>
			</div>
		</div>





</form>

</body>
</html>