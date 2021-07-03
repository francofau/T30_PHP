<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T30 - Ejercicio 20</title>
</head>
<body>
 <?php
    
    abstract class Trabajador {
        protected $nombre;
        protected $sueldo;

        public function __construct($nombre,$sueldo){
          $this->nombre=$nombre;
          $this->sueldo=$sueldo;
        }
        public function muestra_sueldo(){
          return $this->sueldo;
        }
        public function muestra_nombre(){
          return $this->nombre;
        }

    }  
    
    class Empleado extends Trabajador {
    }
    
    class Gerente extends Trabajador {
    }
    
    $objetos=[];
    $o = new Empleado('Franco',rand (1000,1500));
    $o1 = new Empleado('Gabi',rand (1000,1500));
    $o2 = new Empleado('Ricardo',rand (1000,1500));
    $o3 = new Gerente('Javier',rand (2000,3000));
    $o4 = new Gerente('Ana',rand (2000,3000));
    array_push($objetos,$o,$o1,$o2,$o3,$o4);

    $sueldo_max_empleado = 0;
    $nombre_empleado = "";
    $sueldo_max_gerente = 0;
    $nombre_gerente = "";

    for ($i=0; $i < count($objetos) ; $i++) { 
    if ($objetos[$i] instanceof Empleado){

        if ($objetos[$i]->muestra_sueldo() > $sueldo_max_empleado){
        $sueldo_max_empleado = $objetos[$i]->muestra_sueldo();
        $nombre_empleado = $objetos[$i]->muestra_nombre();
        }


    } else{
        if ($objetos[$i]->muestra_sueldo()> $sueldo_max_gerente){
        $sueldo_max_gerente = $objetos[$i]->muestra_sueldo();
        $nombre_gerente = $objetos[$i]->muestra_nombre();
        }
    }
    }

    echo 'Mayor Sueldo: '.$nombre_empleado;
    echo '<br>';
    echo 'Cantidad total: '.$sueldo_max_empleado;
    echo '<br>';
    echo 'Gerente que gana mas: '.$nombre_gerente;
    echo '<br>';
    echo 'Cantidad total: '.$sueldo_max_gerente;
    
?>
</body>
</html>