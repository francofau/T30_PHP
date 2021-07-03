<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T30 - Ejercicio 15</title>
</head>
<body>
 <?php
     class Persona{
        protected $nombre;
        protected $edad;
         final function carga($nombre,$edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function retornar_nombre(){
           return $this->nombre;
        }
        function retornar_edad(){
            return $this->edad;
         }

    }

    $p1 = new Persona;
    $p1->carga("Marce", 29);
    $p2 = clone $p1;
    echo $p2->retornar_nombre();
    echo $p2->retornar_edad();

?>
</body>
</html>