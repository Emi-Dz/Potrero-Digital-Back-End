<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ejercicio 1</h1>
    <?php
    $n=1;
    if($n>0){
      echo "El numero es positivo.";
    } elseif($n<0){
      echo "El numero es negativo.";
    } else{
      echo "El numero es 0.";
    }
     ?>
     <h1>Ejercicio 2</h1>
     <?php
     $n=7;
     if($n>1 & $n<10){
       echo "El numero es mayor a 1 y menor a 10.";
     } else{
       echo "El numero esta fuera de rango";
     }
      ?>
      <h1>Ejercicio 3</h1>
      <?php
      $n=15;
      if ($n>10 || $n<2){
        echo "El numero es mayor a 10 o menor a 2.";
      } else {
        echo "El numero esta entre el 2 y el 10.";
      }
       ?>
       <h1>Ejercicio 4</h1>
       <?php
       $numero1=15;
       $numero2=15;
       if($numero1>$numero2){
         echo "suma= " . $numero1+$numero2 , "<br>";
         echo "resta= " . $numero1-$numero2 , "<br>";
       } elseif($numero1<$numero2){
         echo "multiplicacion= " . $numero1*$numero2 , "<br>";
         echo "division= " . $numero2/$numero1 , "<br>";
         echo "resto= " . $numero2%$numero1 , "<br>";
       } else {
         echo "Los numeros ingresados son iguales.";
       }

        ?>
  </body>
</html>
