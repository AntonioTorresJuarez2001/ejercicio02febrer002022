<?php

	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	
	
    $contenido="
	titulo: $titulo 
    descripcion: $descripcion";

	$archivo = fopen("musica.txt", "w");
	fwrite($archivo,$contenido);
	// Instrucciones para guardar los datos en el archivo musica.txt
     
?>

<?php

				$lecturaArchivo = fopen("musica.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}

				fclose($lecturaArchivo);

			?>
</heady>
<body> 
	<div align="center">
	<h2>Datos enviados </h2>
	<h5><a href="index01.php">Volver a llenar</a></h5>
</div>
</body>
</html>