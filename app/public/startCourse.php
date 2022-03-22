<?php
// // Concatenación
// $agent = '006';
// $name = 'Andres Restrepo';
// $title = "Agente en \"servicio\"";
// $str = <<<'EOD'
// Mi nombre es: $name
// mi número de agente es: $agent
// EOD;
// $output = $name." Num. Agente: ";
// $output .= $agent."<br>";
// $output .= $title;
// // print $str . "Si sirve";
// print $output;

// // Integer
// $num = 2147383647;
// print var_dump($num);
// $num = 2147383647*9999999999; //supera el límite del entero para x86_64
// print var_dump($num);

// // Float
// $a = 1234.5678;
// $a = 12345.2e4;
// $a = 7E-10;
// $e = 1.23456789;
// $d = 1.2345678901;
// $epsilon = 0.00001; //presicion a cinco decimales
// if(abs($e-$d) < $epsilon) print "Son iguales";
// else print "Son diferentes";

// Boolean
// true o false pueden ser escrito como TRUE o FALSE respectivamente

?>
<!-- <!-1- Variable de una variable -1-> -->

<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
<!--     <head> -->
<!--         <meta charset="UTF-8"> -->
<!--         <title></title> -->
<!--     </head> -->
<!--     <body> -->
<!--         ?php -->
<!--         $cdmx = 22000000; -->
<!--         $guadalajara = 4000000; -->
<!--         // variable de variables -->
<!--         $city = "cdmx"; -->
<!--         print "<p> La población de la ciudad $city es de ${$city} </p>"; -->
<!--         $city = "guadalajara"; -->
<!--         print "<p> La población de la ciudad $city es de ${$city} </p>"; -->
<!--         // Constantes -->
<!--         define("TASA_CAMBIO", 18.35); -->
<!--         $deuda = 12345; -->
<!--         print "Tu deuda es de $" . ($deuda * TASA_CAMBIO) . "usd"; -->
<!--         ?> -->
<!--     </body> -->
<!-- </html> -->

<!-- ?php -->
<!-- // Secuencias de escape Unicode -->
<!-- echo "\u{10084}"; -->
<!-- echo "\u{000aa}"; -->
<!-- echo "\u{9999}"; -->
<!-- ?> -->

<!-- Tipos de datos -->
<!DOCTYPE html>
<!-- <html> -->
    <!-- <head> -->
    <!--     <meta charset="UTF-8" /> -->
    <!--     <meta name="viewport" content="width=device-width" /> -->
    <!--     <title>Index</title> -->
    <!-- </head> -->
    <!-- <body> -->
    <!--     ?php -->
    <!--     $div = 10/3; -->
    <!--     print $div . "<br>"; -->
    <!--     $integer = (int)$div; // El parseo de este tipo solo es valido sobre una variable, no sobre operaciones -->
    <!--     print $integer . "<br>"; -->
    <!--     var_dump($div); -->
    <!--     print "<br>"; -->
    <!--     var_dump($integer); -->
    <!--     print "<br>"; -->
    <!--     print intval(10/3) . "<br>"; -->
    <!--     settype($div, "integer"); -->
    <!--     var_dump($div); -->
    <!--     print "<br>"; -->
    <!--     print gettype($div); -->
    <!--     ?> -->
    <!-- </body> -->
<!-- </html> -->

<!-- ?php -->
<!-- // Operador bit a bit -->
<!-- $values = array(0, 1, 2, 3, 4, 8); -->
<!-- $test = 1 + 4; -->
<!-- $formater = '(%1$2d = %1$04b) = (%2$2d = %2$04b)' -->
<!--     . '%3$s (%4$2d = %4$04b)' . "<br>"; -->
<!-- echo 'AND bit a bit <br>'; -->
<!-- foreach ($values as $value) { -->
<!--     $result = $value & $test; -->
<!--     printf($formater, $result, $value, '&', $test); -->
<!-- } -->
<!-- ?> -->


<!-- ?php -->
<!-- // Operador de fusion de null -->
<!-- // http://localhost:8001/?user=Andres -->
<!-- $user = $_GET["user"] ?? $_POST["user"] ?? "Anonimus"; -->
<!-- print $user; -->
<!-- ?> -->


<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
<!-- <head> -->
<!--     <meta charset="UTF-8"> -->
<!--     <title></title> -->
<!-- </head> -->
<!-- <body> -->
<!--     ?php -->
<!--         $number = 8; -->
<!--         $binary = ""; -->
<!--         do { -->
<!--             $d = $number % 2; -->
<!--             $binary = $d . $binary; -->
<!--             $number = intval($number/2); -->
<!--         } while ($number >= 2); -->
<!--         $binary = $number . $binary; -->
<!--         print "<p>El numero binario es: " . $binary . "</p>"; -->
<!--     ?> -->
<!-- </body> -->
<!-- </html> -->
