<!-- Arrays -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $employee = array(
        "first_name" => "Andres",
        "last_name" => "Restrepo",
        "age" => 34,
        "number" => "006"
        );
//         print "Nombre: ".$employee["first_name"]." ".$employee["last_name"];
//         foreach( $employee as $key => $value ) {
//             print "<p>El valor de la propiedad ".$key." es de: ".$value."</p>";
//         }
        $student["first_name"] = "Pedro";
        $student["last_name"] = "Picapiedra";
        $student["task"] = "Montacargas";
//         foreach( $student as $key => $value ) {
//             print "<p>El valor de la propiedad <b>".$key."</b>$key es de: ".$value."</p>";
//             print "El nombre del empleado es $employee[first_name], " .$employee["last_name"]; //recomendado el uso de las comillas simples o dobles
//         }
        $monts = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $days[] = "Lunes";
        $days[] = "Martes";
        $days[] = "Miércoles";
        $days[] = "Jueves";
        $days[] = "Viernes";
        $days[] = "Sábado";
        $days[] = "Domingo";
        $apprentices[0] = "miguel";
        $apprentices[1] = "Michell";
        $apprentices[2] = "luisa";
        $apprentices[3] = "Laura";
        $apprentices[4] = "pedro";
        $apprentices[5] = "Pablo";

//         // Some array functions
//         array_push($monts, "thirteenMont", "fourteenMont");
//         array_unshift($days, "first", "firsting"); // add element to beginning
//         array_shift($monts); // delete first element
//         $firstMont = array_shift($monts);
//         $newMonts = array_slice($monts,10,2); // copy only
//         $deletedDays = array_splice($days, 5, 2); // copy and delete
//         $montsDays = array_merge($monts, $days);
//         foreach($montsDays as $key => $value){
//             print "<p>Elemento ".$key." con valor: ".$value."</p>";
//         }
//         print "<hr>";
//         foreach ($newMonts as $key => $value) {
//     	    print "<p>Elemento ".$key." con valor: ".$value."</p>";
//         }
//         print "<hr>";
//         foreach ($deletedDays as $key => $value) {
//         	print "<p>Elemento ".$key." con valor: ".$value."</p>";
//         }


//         // Array sorting
//         sort($monts);
//         foreach ($monts as $key => $value) {
// 	        print "<p>Meses[".$key."] = ".$value."</p>";
//         }
//         $cal = array(2,3,5,4,60,40,20,30,200,100,25);
//         sort($apprentices); // first: words that start with capital letters
//         foreach ($apprentices as $key => $value) {
//         	print "<p>apprentices[".$key."] = ".$value."</p>";
//         }
//         sort($apprentices, SORT_NATURAL | SORT_FLAG_CASE); // Sort words alphabetically by placing capitalized words at a higher level
//         foreach ($apprentices as $key => $value) {
//         	print "<p>apprentices[".$key."] = ".$value."</p>";
//         }
//         // sort($cal);
//         sort($cal, SORT_STRING); // Sort words numerically considering first digit
//         foreach ($cal as $key => $value) {
//         	print "<p>Calificación[".$key."] = ".$value."</p>";
//         }


        // Sorting asociative array
        // asort(arrayName);


        shuffle($apprentices); // baraja el arreglo
        print "<ul>";
        foreach ($apprentices as $key => $value) {
        	print "<li>".$value."</li>";
        }
        print "</ul>";
        
        $exam = array_rand($apprentices,2); // extrae, en este caso, el número de la llave
        print "<ul>";
        foreach ($exam as $key => $value) {
        	print "<li>".$value." ".$apprentices[$value]."</li>";
        }
        print "</ul>";
        
        print "<ul>";
        foreach ($apprentices as $key => $value) {
        	print "<li>".$value."</li>";
        }
        print "</ul>";

   ?>
</body>
</html>

