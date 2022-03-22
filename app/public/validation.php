<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
    <style>
        .error { color:red; margin:0; padding:0; }
    </style>
<?php
// validacion con isset
if(isset($_POST["flag"])){
    // se reciben valores que se almacenaran en variables de trabajo
	$name = $_POST["name"];
	$password = $_POST["password"];
	$comment = $_POST["comment"];
	$state = $_POST["state"];
	$language = $_POST["language"];
	$hobbies = $_POST["hobbies"];
	$cakes = $_POST["cakes"];
	/*** Valicación ***/
	$error = array();
	if($name==""){
        $error[0] = "Error: el nombre del usuario no puede estar vacío";
	} 
	if($password==""){
        $error[1] = "Error: la clave de acceso no puede ser vacía";
	} 
	if($comment==""){
		$error[2] = "Error: los comentarios son requeridos";
	} 
	if($state==""){
		$error[3] = "Error: el estado civil es requerido";
	} 
	if($language==""){
        $error[4] = "Error: el idioma es requerido";
	}
	if(isset($hobbies)){ 
		if(count($hobbies)==0){
			$error[5] = "Error: debe de seleccionar al menos un pasatiempo";
		}
	} else {
		$error[6] = "Error: debe de seleccionar al menos un pasatiempo";
	}
	if(isset($cakes)){ 
		if(count($cakes)==0){
			$error[7] = "Error: debe de seleccionar al menos un sabor de pastel";
		}
	} else {
		$error[8] = "Error: debe de seleccionar al menos un sabor de pastel";
    }
} 
?>
</head>
<body>
    <?php
    /** Al inicio, la consulta no devuelve ningun registro, por lo que seguramente la variable $error tenga valor false devolviendo 
    'Warning: count(): Parameter must be an array or an object that implements Countable in ...'. 
    Así que se pregunta por la variable $error y si es false, ya no continua revisando el resto de condiciones. */
    if($error && count($error)==0 && isset($_POST["flag"])){
		print "<h1>".$name.", bienvenido a nuestra página</h1>";
		print "<p>Contraseña de usuario: ".$password."</p>";
		print "<p>Comentarios : ".$comment."</p>";
		print "<p>Estado Civil : ".$state."</p>";
		print "<p>Idioma : ".$language."</p>";
		print "<p>Num. hobbies: ".count($hobbies)."</p>";
		print "<ol>";
		foreach ($hobbies as $key => $value) {
			print "<li>".$value."</li>";
		}
		print "</ol>";
		print "<p>Sabor de pastel: ".count($cakes)."</p>";
		print "<ol>";
		foreach ($cakes as $key => $value) {
			print "<li>".$value."</li>";
		}
		print "</ol>";
    } else {
    ?>
	<form action="index.php" method="POST">
		<label for="name">* Nombre:</label><br>
		<input type="text" name="name" id="name"/><br>
        <?php
		if(isset($error[0])) print "<p class='error'>".$error[0]."</p>";
		?>
		<label for="password">* Contraseña:</label><br>
		<input type="password" name="password" id="password"/><br>
        <?php
		if(isset($error[1])) print "<p class='error'>".$error[1]."</p>";
		?>
		<label for="comment">Comentarios:</label><br>
		<textarea id="comment" name="comment"></textarea><br>
        <?php
		if(isset($error[2])) print "<p class='error'>".$error[2]."</p>";
		?>
		<label for="language">Idioma:</label><br>
		<select id="language" name="language">
			<option value="es">Español</option>
			<option value="en">Inglés</option>
			<option value="fr">Francés</option>
		</select><br>
        <?php
		if(isset($error[3])) print "<p class='error'>".$error[3]."</p>";
		?>
		<label for="state">Estado:</label><br>
		<input type="radio" name="state" id="single" value="single"><label for="single">Soltero</label><br>
		<input type="radio" name="state" id="married" value="married"><label for="married">Casado</label><br>
		<input type="radio" name="state" id="widowed" value="widowed"><label for="widowed">Viudo</label><br>
        <?php
		if(isset($error[4])) print "<p class='error'>".$error[4]."</p>";
		?>
		<label>Pasatiempos:</label><br>
		<label><input type="checkbox" name="hobbies[]" value="read" id="read">Leer</label><br>
		<label><input type="checkbox" name="hobbies[]" value="sleep" id="sleep">Dormir</label><br>
		<label><input type="checkbox" name="hobbies[]" value="chess" id="chess">Ajedrez</label><br><br>
        <?php
		if(isset($error[5])) print "<p class='error'>".$error[5]."</p>";
		if(isset($error[6])) print "<p class='error'>".$error[6]."</p>";
		?>
		<label for="cakes">Sabor de cakes preferidos:</label><br>
		<select multiple="multiple" name="cakes[]" id="cakes">
			<option value="chocolate">Chocolate</option>
			<option value="fresa">Fresa</option>
			<option value="vainilla">Vainilla</option>
			<option value="coco">Coco</option>
			<option value="napolitano">Napolitano</option>
		</select><br>
        <?php
		if(isset($error[7])) print "<p class='error'>".$error[7]."</p>";
		if(isset($error[8])) print "<p class='error'>".$error[8]."</p>";
		?>
        <input type="hidden" name="flag" id="flag" value="flag">
		<input type="submit" value="Enviar datos"/>
	</form>
    <?php } ?>
</body>
</html>
