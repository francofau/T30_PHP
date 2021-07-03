<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T30 - Ejercicio 23</title>
</head>
<body>
 <?php
    
  class Calculadora{
    function sumar($v1,$v2){
      return $v1+$v2;
    }
    function restar($v1,$v2){
      return $v1-$v2;
    }
    function multiplicar($v1,$v2){
      return $v1*$v2;
    }
    function dividir($v1,$v2){
      return $v1/$v2;
    }

  }

  $c = new Calculadora;
  echo $c->sumar(10,10);
  echo '<br>';
  echo $c->restar(10,2);
  echo '<br>';
  echo $c->multiplicar(10,8);
  echo '<br>';
  echo $c->dividir(10,3);

?>
</body>
</html>