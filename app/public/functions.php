<!DOCTYPE html>
<html>
    <head>
        <title>Gerneradores</title>
    </head>
    <body>
        <?php
            // Generadores
            
//            /* En su forma más simple, la sentencia yield es parecida 
//            a la sentencia return, excepto en que en vez de detener 
//            la ejecución de la función y devolver un valor, 
//            yield facilita el valor al bucle que itera sobre el generador 
//            y pausa la ejecución de la función generadora.*/
//            $gen = (function(){
//                yield 1;
//                yield 2;
//                return 3;
//            })();
//            foreach ($gen as $value) {
//                print $value."<br>";
//            }
//            print $gen->getReturn()."<br>"; //obtiene el valor del return

           
//            // Delegacion de generadores con "yield from"
//            function gen() {
//            	yield 1;
//            	yield 2;
//            	yield from gen2();
//            }
//            
//            function gen2() {
//            	yield 3;
//            	yield 4;
//            }
//            foreach (gen() as $val) {
//            	print $val." ";
//            }
//            
//            print "<hr>";
//            
//            function americaNorte() {
//            	yield "Canadá";
//            	yield "México";
//            }
//            function americaCentral() {
//            	yield "Costa Rica";
//            	yield "Honduras";
//            }
//            function americaSur() {
//            	yield "Colombia";
//                }
//            	yield "Perú";
//            function capitalesAmerica() {
//            	yield from americaNorte();
//            	yield from americaCentral();
//            	yield from americaSur();
//            }
//            foreach (capitalesAmerica() as $val) {
//            	print $val."<br>";
//            }
//            print "<hr>";



            $mensaje = "hola";
            
            //Sin el "use"
            $ejemplo = function(){
            	var_dump($mensaje);
            };
            $ejemplo();
            
            print "<hr>";
            //Utilizando "use"
            $ejemplo = function() use ($mensaje){
            	var_dump($mensaje);
            };
            $ejemplo();
            
            print "<hr>";
            //Utilizando "use" por referencia
            $mensaje = "adios";
            $ejemplo = function() use ($mensaje){
            	var_dump($mensaje);
            };
            $ejemplo();
            
            print "<hr>";
            //Utilizando "use" por referencia y argumentos
            $mensaje = "buenas tardes";
            $ejemplo = function($arg) use ($mensaje){
                $mensaje = "venga le digo";
            	var_dump($arg.", ".$mensaje);
            };
            $ejemplo("Pedro Picapiedra");


        ?>
    </body>
</html>
