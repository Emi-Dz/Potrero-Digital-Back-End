<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ejercicio 1</h1>
    <?php
    echo "Hola mundo";
     ?>
    <h1>Ejercicio 2</h1>
    <?php
    $saludo="Hola mundo";
    echo $saludo;
     ?>
     <h1>Ejercicio 3</h1>
     <?php
     $num1=10;
     $num2=2;

     echo "la suma de $num1 y $num2 es = " .$num1+$num2 , "<br>";
     echo "la resta de $num1 y $num2 es = " .$num1-$num2 , "<br>";
     echo "la multiplicacion de $num1 y $num2 es = " .$num1*$num2 , "<br>";
     echo "la division de $num1 y $num2 es = " .$num1/$num2 , "<br>";
     echo "el resto de $num1 y $num2 es = " .$num1%$num2 , "<br>";
      ?>
     <h1>Ejercicio 4</h1>
     <?php
      $temp_c=20;
      $temp_f;

      $formula=$temp_c*1.8+32;

      echo "20 grados celcius es igual a ".$formula , " grados fahrenheit.";
      ?>
      <h1>Ejercicio 5</h1>
      <h3>A)</h3>
      <?php
        $base=18;
        $altura=12;
        echo "el perimetro del rectangulo es: ". 2*($base+$altura), "<br>";
        echo "el area del rectangulo es: ". $base*$altura;
        ?>
      <h3>B)</h3>
      <?php
        $radio=30;
        define ("PI",3.14);
        echo "el perimetro del circulo es: " . 2*PI*$radio , "<br>";
        echo "el area del circulo es: " . PI*($radio*$radio);
       ?>
  </body>
</html>
