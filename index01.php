<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
       <!-- Cargar los estilos -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">

  
</head>
<body>
    
    <section class="section">
		
		<form action="guardar.php" method="post">
			<div>
				<label>Título:</label>
				<input type="text" class="input" name="titulo" placeholder="Escribe el título">
			</div>

			<div>
				<label>Descripción:</label>
				<textarea name="descripcion" class="input" placeholder="Agregue la descripción">
					
				</textarea>
			</div>

			<input type="submit" class="button is-link" value="Guardar">
		</form>

	</section>
</body>
</html>