<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php

        // Superglobals
        $nombre = "Andres";
        $apellido = "Restrepo";
        function saludo(){
            return "Hola ".$GLOBALS['nombre']." ".$GLOBALS['apellido'];
        }
        print saludo();
        print "<hr>";
        print $_SERVER["PHP_SELF"]."<br>";
        print $_SERVER["SERVER_NAME"]."<br>";
        print "HTTP_HOST: ". $_SERVER["HTTP_HOST"]."<br>";
        print $_SERVER["HTTP_REFERER"]."<br>";
        print $_SERVER["SCRIPT_NAME"]."<br>";
        print $_SERVER["HTTP_USER_AGENT"]."<br>";
        print $_SERVER['REMOTE_ADDR']

        
//        $info = array("guayaba","Psidium","Myrtaceae","del Caribe");
//        list($nombre,$cientifico,$familia,$origen) = $info;
//        print "La ".$nombre." (".$cientifico.") son un género de unas cien especies de árboles tropicales y árboles pequeños en la familia ".$familia.", nativas ".$origen.".<hr>";
//        list($nombre,$cientifico,,$origen) = $info;
//        print "La ".$nombre." (".$cientifico.") son un género de unas cien especies de árboles tropicales y árboles pequeños, nativas ".$origen.".<hr>";
//        list($nombre,$cientifico,,) = $info;
//        print "La ".$nombre." (".$cientifico.") es una fruta deliciosa<hr>";
//        list($nombre,,,) = $info;
//        print "La ".$nombre." es la fruta con mayor cantidad de vitamina C<hr>";
//        list($nombre) = "guayaba";
//        print "La ".$nombre." es la fruta con mayor cantidad de vitamina C<hr>";

    ?>
</body>
</html>
