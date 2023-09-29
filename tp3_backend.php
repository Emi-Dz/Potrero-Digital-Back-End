<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>EJERCICIO 1</h1>
    <?php
      for ($i=1;$i<=100;$i++){
        print "<p> $i </p>";
      }
     ?>
     <h1>EJERCICIO 2</h1>
     <?php
     for ($i=100;$i>=1;$i--){
       print "<p> $i </p>";
     }
      ?>
      <h1>EJERCICIO 3</h1>
      <?php
        for ($i=1;$i<=100;$i++){
          if ($i%2==0){
              print "<p> $i </p>";
          }
        }
       ?>
       <h1>EJERCICIO 4</h1>
       <?php
         for ($i=1;$i<=100;$i++){
           if ($i%2!=0){
               print "<p> $i </p>";
           }
         }
        ?>
        <h1>EJERCICIO 5</h1>
        <?php
        $suma=0;
          for ($i=1;$i<=20;$i++){
            $suma=$suma+$i;
            print "$i + ";
          }
          print "<p> total= $suma </p>";
         ?>
         <h1>EJERCICIO 6</h1>
         <?php
         $suma=0;
           for ($i=1;$i<=20;$i++){
             if($i%2==0){
             $suma=$suma+$i;
             print "$i + ";
           }
           }
           print "<p> total= $suma </p>";
          ?>
  </body>
</html>
