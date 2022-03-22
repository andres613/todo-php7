<?php
if(isset($_GET["who"])){
    $who = $_GET["who"];
    // Si se va a hacer redireccion mediante el comando header, no puede haber una salida en pantalla,
    // un espacio en blanco porque puede marcar error
    // print $who;
    if($who === "dog") {
        header("location:headerDog.php");
    } else {
        header("location:headerCrocodile.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="header.php" method="GET">
        <label for="">That I am?</label>
        <input type="radio" name="who" id="dog" value="dog"><label for="dog">Perro</label>
        <input type="radio" name="who" id="crocodile" value="crocodile"><label for="crocodile">Cocodrilo</label>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
