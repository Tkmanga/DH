<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // Mostrar la tabla de multiplicar del 2 utilizando un for.
      // for ($i=1; $i <= 20 ; $i++) {
      //   if (($i%2)==0) {
      //     echo $i;
      //   }
      // }

      //Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente).
      // $numero = 100;
      // while ($numero >= 85) {
      //   echo "$numero <br>";
      //   $numero--;
      // }


      //Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.
      // $contador = 1;
      // while ($contador <= 5) {
      //   echo ($contador*2)."<br>";
      //   $contador++;
      // }

      //Utilizando un while haremos un programa que tire una moneda (seleccionará un número al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara.
      // $contador = 0;
      // $contadorTiradas = 0;
      // while ($contador < 5) {
      //   $numero = rand(0,1);
      //   if ($numero==1) {
      //     $contador++;
      //   }
      //   $contadorTiradas++;
      // }
      // echo "Se tiraron ".$contadorTiradas." monedas";


      // Definir un array con 5 strings que sean nombres. Recorrer este array para imprimir cada uno de los nombres en pantalla.
      // Resolver este problema con un for.
      // Resolver este problema con while.
      // Resolver este problema con un do/while.
      // Resolver este problema con un foreach.
      //$arreglo = ["str1","str2","str3","str4","str5"];

      // for ($i=0; $i <count($arreglo) ; $i++) {
      //   echo $arreglo[$i]. "<br>";
      // }

      // $i=0;
      // while ($i < count($arreglo)) {
      //   echo $arreglo[$i]."<br>";
      //   $i++;
      // }

      // $i=0;
      // do {
      //    echo $arreglo[$i]."<br>";
      //   $i++;
      //   // code...
      // } while ($i < count($arreglo));
      // foreach ($arreglo as $valor) {
      //   echo $valor."<br>";
      // }
      //Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”)
      // $arreglo = [rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];
      // foreach ($arreglo as $value) {
      //   if ($value==5) {
      // (    echo "tiene valor 5";
      //     break;
      //   }
      //   echo $value."<br>";
      // }
      //Definir un array con 10 números aleatorios entre 0 y 100. Recorrer este array contando cuantos números son pare        s

      // $arreglo = [rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100)];
      // $contadorPar=0;
      // foreach ($arreglo as $value) {
      //   if($value%2==0){
      //     $contadorPar++;
      //   }
      // }
      //
      // echo $contadorPar;
      /*
      Definir una variable $mascota que sea un array asociativo
      En el índice animal debe decir qué animal es.
      En el índice edad debe decir la edad.
      En el índice altura debe decir la altura.
      En el índice nombre debe decir el nombre
      */
      //
      // $mascota = [
      //   "animal" => "perro",
      //   "edad" => 5,
      //   "altura" => 0.60,
      //   "nombre" => "Sonic"
      // ];
      //
      // foreach ($mascota as $key => $value) {
      //   echo $key.": ".$value."<br>";
      // }

      /*
      Crear un script que muestre el nombre de la capital y el país desde la variable $ceu.
      */

    // $ceu = array(
    // "Italia"=>"Roma",
    // "Luxembourg"=>"Luxembourg",
    // "Bélgica"=> "Bruselas",
    // "Dinamarca"=>"Copenhagen",
    // "Finlandia"=>"Helsinki",
    // "Francia" => "Paris",
    // "Slovakia"=>"Bratislava",
    // "Eslovenia"=>"Ljubljana",
    // "Alemania" => "Berlin",
    // "Grecia" => "Athenas",
    // "Irlanda"=>"Dublin",
    // "Holanda"=>"Amsterdam",
    // "Portugal"=>"Lisbon",
    // "España"=>"Madrid",
    // "Suecia"=>"Stockholm",
    // "Reino Unido"=>"London",
    // "Chipre"=>"Nicosia",
    // "Lithuania"=>"Vilnius",
    // "Republica Checa"=>"Prague",
    // "Estonia"=>"Tallin",
    // "Hungría"=>"Budapest",
    // "Latvia"=>"Riga",
    // "Malta"=>"Valletta",
    // "Austria" => "Vienna",
    // "Polonia"=>"Warsaw");
    //
    // foreach ($ceu as $key => $value) {
    //   echo "Pais: ".$key." Capital: ".$value." <br>";
    // };
    /*
     Partiendo de un archivo con la siguiente variable definida:
    */?>
<!--
    <?php
     $ceu = [
        "Argentina"=>["Buenos Aires", "Córdoba", "Santa Fé","esAmericano"=>true],
        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo","esAmericano"=>true],
        "Colombia" => ["Cartagena", "Bogota", "Barranquilla","esAmericano"=>true],
        "Francia" => ["Paris", "Nantes", "Lyon","esAmericano"=>false],
        "Italia" => ["Roma", "Milan", "Venecia","esAmericano"=>false],
        "Alemania" => ["Munich", "Berlin", "Frankfurt","esAmericano"=>false]
        ];
    ?>
      <ul>
        <?php foreach ($ceu as $key => $value) { ?>
          <li>
              <?php if ($ceu[$key]["esAmericano"]==true) {?>
                <?php echo "Las ciudades de ".$key." son:" ?>
                  <ul>
                    <?php foreach ($ceu[$key] as  $value): ?>
                      <li>
                        <?php echo $value ?>
                      </li>
                    <?php endforeach; ?>
                </ul>.
              <?php }; ?>
          </li>
        <?php }; ?>
      </ul>
-->
  <?php
//   Partiendo del archivo embed.html
// Inicializar una variable $nombre antes del código HTML y reemplazar [NOMBRE] por el valor de dicha variable
// Previo al código HTML sortear un número que puede ser 0 o 1. Si el número es 1 se imprimirá luego del texto “¿Es usted un ganador?” el texto “SI”. Por el contrario, si el número es 0, se imprimirá el texto “NO”.
// Modificar el listado de sitios web para que estos sean tomados de un Array. ¿Cómo podemos hacer para que también se generen bien los hipervínculos?
// ¿Pudiste escribir todo el código utilizando la sintaxis corta?

   ?>
  </body>
</html>
