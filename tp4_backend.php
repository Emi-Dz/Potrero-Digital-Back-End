<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>EJERCICIO 1</h1>
    <?php
      $num_pares= [2,4,6,8,10,12,14,16,18,20];
       foreach ($num_pares as $valor) {
         print "<p>$valor</p>";
       }
     ?>
     <h1>EJERCICIO 2</h1>
     <?php
      $array=["Pedro","Ana",34,1];
      print_r($array);
      ?>

      <?php
      //EJERCICIO 3
        $personas=[
            'Nombre' => "Pedro",
            'Apellido' => "Torres",
            'Direccion' => "Av. Mayor 3703",
            'Telefono' => 1122334455,
        ]
       ?>
       <h1>EJERCICIO 4</h1>
       <?php
        $ciudades=["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];
        foreach ($ciudades as $key => $value) {
          print "<p>La ciudad con el indice $key tiene el nombre de $value.</p>";
        }
        ?>
        <h1>EJERCICIO 5</h1>
        <?php
          $ciudades=[
                'MD' => "Madrid",
                'BCL' => "Barcelona",
                'LD' => "Londres",
                'NY' => "New York",
                'LA' => "Los Angeles",
                'CCG' => "Chicago",
          ];
          foreach ($ciudades as $key => $value) {
            print "<p> El indice de $value es $key. </p>";
          }
         ?>
  </body>
</html>
