<!DOCTYPE html>
<html>
<head>
	<title>Plantilla animales</title>
	<meta charset="utf-8">
	<?php
	if(isset($_GET["animal"])){
		$animal = $_GET["animal"];
		if ($animal==1) {
			$title = "Perro";
			$image = "perro.jpg";
		}
		if ($animal==2) {
			$title = "Gato";
			$image = "gato.jpg";
		}
		if ($animal==3) {
			$title = "Gallo";
			$image = "gallo.jpg";
		}
		if ($animal==4) {
			$title = "Manati";
			$image = "manati.jpg";
		}
	}
	?>
</head>
<body>
	<h1>Soy un <?php print $title; ?></h1>
	<img src="<?php print 'images/'.$image; ?>" width="400" height="auto">
</body>
</html>
