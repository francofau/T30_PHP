<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T30 - Ejercicio 1</title>
</head>
<body>
    <!-- Implementar la clase Operacion. El constructor recibe e inicializa los atributos $valor1 y $valor2. La subclase
Suma añade un atributo $titulo. El constructor de la clase Suma recibe los dos valores a sumar y el título. -->
 <?php
    abstract class Operacion{
        protected $valor1;
        protected $valor2;
        protected $resultado;
        function muestra(){
        }

    }

    class suma extends Operacion{
        function carga($valor1,$valor2){
            $this->valor1 = $valor1;
            $this->valor2 = $valor2;
        }
        function muestra(){
            $this->resultado = ($this->valor1 + $this->valor2) ;
            return  $this->resultado;
        }
    }
    
    class resta extends Operacion{
        function carga($valor1,$valor2){
            $this->valor1 = $valor1;
            $this->valor2 = $valor2;
        }
        function muestra(){
            $this->resultado = ($this->valor1 - $this->valor2) ;
            return  $this->resultado;
        }
    }

    $op1 = new suma;
    $op1->carga(12,34);
    echo $op1->muestra();
    echo '<br>';
    $op1 = new resta;
    $op1->carga(12,2);
    echo $op1->muestra();

?>
</body>
</html>