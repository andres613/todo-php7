<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<form action="form1-data-validator.php" method="POST">
        <label for="name">Nombre:</label>
		<input type="text" name="name" id="name"/><br>
        <label for="pass">Clave:</label>
		<input type="password" name="password" id="pass"/><br>
        <textarea id="comment" name="comment"></textarea><br>
        <label for="language">Idiomas:</label><br>
        <select id="language" name="language">
            <option value="es">Español</option>
            <option value="en">Inglés</option>
            <option value="fr">Francés</option>
        </select><br>
        <label for="state">Estado:</label><br>
        <input type="radio" name="state" id="single">
            <label for="single">Soltero</label><br>
        <input type="radio" name="state" id="married">
            <label for="married">Casado</label><br>
        <input type="radio" name="state" id="widower">
            <label for="widower">Viudo</label><br>
  		<label>Pasatiempos:</label><br>
		<label>
            <input type="checkbox" name="hobbies[]" value="read" id="read">
            Leer</label><br>
		<label>
            <input type="checkbox" name="hobbies[]" value="sleep" id="sleep">
            Dormir</label><br>
		<label>
            <input type="checkbox" name="hobbies[]" value="chess" id="chess">
            Ajedrez</label><br>
		<label for="cakes">Sabor de pasteles preferidos:</label><br>
		<select multiple="multiple" name="cakes[]" id="cakes">
			<option value="chocolate">Chocolate</option>
			<option value="strawberry">Fresa</option>
			<option value="vanilla">Vainilla</option>
			<option value="coconut">Coco</option>
			<option value="neapolitan">Napolitano</option>
        </select><br>
		<input type="submit" value="Enviar datos"/>
	</form>
</body>
</html>
