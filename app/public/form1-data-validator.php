<?php
    $name = $_POST["name"];
    $password = $_POST["password"];
    $comment = $_POST["comment"];
    $state = $_POST["state"];
    $language = $_POST["language"];
    $hobbies = $_POST["hobbies"];
    $cakes = $_POST["cakes"];
    /** Validacion*/
    $error = array();
    if($name == ""){
        array_push($error, "Error: el campo \"Nombre\" no puede estar vacío");
    }
    if($password == ""){
        array_push($error, "Error: el campo \"Clave\" no puede estar vacío");
    }
    if($comment == ""){
        array_push($error, "Error: el campo \"Comentarios\" no puede estar vacío");
    }
    if($state == ""){
        array_push($error, "Error: debe seleccionar un estado civil");
    }
    if($language == ""){
        array_push($error, "Error: debe seleccionar un lenguaje");
    }
    if($hobbies == ""){
        array_push($error, "Error: seleccione uno o varios pasatiempos");
    }
    if($cakes == ""){
        array_push($error, "Error: seleccione uno o varios sabores");
    }

    if(count($error) > 0) {
        print "<ul>";
    	foreach ($error as $key => $value) {
    		print "<li>".$value."</li>";
    	}
    	print "</ul>";
    } else {
        print "<h1>".$name.", bienvenido a nuestra página</h1>";
        print "<p>Clave de usuario: ".$password."</p>";
        print "<p>Comentarios     : ".$comment."</p>";
        print "<p>Estado Civil    : ".$state."</p>";
        print "<p>Idioma          : ".$language."</p>";
        print "<p>Num. pasatiempos: ".count($hobbies)."</p>";
        print "<ol>";
            foreach ($hobbies as $key => $value) {
            print "<li>".$value."</li>";
            }
            print "</ol>";
        print "<p>Sabor de pasteles: ".count($cakes)."</p>";
        print "<ol>";
            foreach ($cakes as $key => $value) {
            print "<li>".$value."</li>";
            }
        print "</ol>";
    }
?>
