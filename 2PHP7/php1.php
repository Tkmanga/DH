<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // probando
      //$segundos =  date("s");

      //if ($segundos>30) {
      //  echo "Estamos en el final del minuto";
      //} else {
    //    echo "Estamos en el princio del minuto";
      //}

      // /*Escribir en código una variable $persona que sea un array con la siguiente información.*/
      // $persona = [
      //   "Nombre" => "Jon",
      //   "Apellido" => "Snow",
      //   "Edad" => 27,
      //   "Hobbies" => ["Netflix","Futbol","Programar"]
      // ];
      // echo  $persona[Edad];
      // /*Modificar la edad del array anterior a 25.*/
      // $persona[Edad] = 25;
      // echo  $persona[Edad];
      // /*Agregar un campo Dirección con la el valor “Winterfell”*/
      // $persona = ["Direccion" => "Winterfell"];
      // echo  $persona[Direccion];
      // /*Agregar un cuarto hobby.*/
      // $persona[Hobbies] = "Musica";
      // echo $persona[Hobbies];

      /*
      Definir dos variable con números y compararlos con un if para decidir cuál número
      es mayor e imprimir “El número mayor es N” donde N sea el valor de la variable que resultó ser mayor, y un else para cubrir el caso inverso.
      */

      // $var1 = 5;
      // $var2 = 4;
      //
      // if ($var1>$var2) {
      //   echo "El primero es el mas grandee";
      // } else {
      //   echo "El segundo es el mas grande";
      // };

      //echo $retVal = ($var1>$var2) ? "El primero es el mas grande" : "El segundo es mas grande" ;

      /*
      Utilizando la función propia de PHP rand(x,y), donde “x” es el número mínimo e “y” el número máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable e imprimir la variable si y sólo si el número generado es 3 o 5.
      */

      // $vari = rand(1,5);
      // if ($vari==3 or $vari==5) {
      //   echo "la variable es ".$vari;
      // }

      /*
      Utilizando la variable del ejercicio anterior, imprimir “El número NO es 3” en el caso que sea verdad esa premisa. En el caso que sí lo sea que simplemente se imprima el número 3.
      */
      // $vari = rand(1,5);
      // if ($vari==3) {
      //   echo $vari;
      // } else {
      //   echo "No es 3";
      // }

      /*
      Generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea verdadero, devolver “El número es mayor a 50”, en el caso que sea falso: “El número es menor a 50”.
      */
      // $var = rand(1,100);
      // if ($var>50) {
      //   echo "El numero es mayor a 50";
      // }else{
      //   echo "El numero es menor a 50";
      // }
      /*
      ¿Qué pasa si el número es 50?
      Parse error: syntax error, unexpected 'if' (T_IF) in C:\xampp\htdocs\inicio.php on line 75
      */

      /*
      Generar dos variables, una $nombreDeUsuario y $ContraseniaDeUsuario, ambos strings. Validar que el usuario corresponda a "admin" y la contraseña a "1234". De ser asi, que imprima "Bienvenido!", sino, que imprima que hay un error en el login.
      */

      // $nombreDeUsuario="admin";
      // $ContraseniaDeUsuario=1234;
      //
      // if ($nombreDeUsuario=="admin" && $ContraseniaDeUsuario==1234){
      //   echo "bienvenido";
      // }
      // else
      // {
      //   if($nombreDeUsuario!="admin")
      //   {
      //     echo "El usuario no corresponde";
      //   }
      //   if ($ContraseniaDeUsuario!=1234)
      //   {
      //     echo "La contraseña no corresponde";
      //   }else {
      //     echo "alguna de las 2 esta vacia";
      //   }
      // };
      /*
      Tendremos 3 variables: edad (un número), casado (un booleano) y sexo (string que puede ser “Masculino”, “Femenino” u “Otro”). Si la persona es mayor a 18 años y no está casado se imprimirá el mensaje “Bienvenido”.
      */
      /*
      $edad = 17;
      $casado = false;
      $sexo = "Otro";
      if (($edad>=18 && $casado==True) || $sexo=="Masculino") {
        echo "bienvenido";
      }else{

        echo "no";
      }
      */
      /*
      Definir una variable que se llame cantidadDeAlumnos que contenga un número. Luego, escribir el siguiente código: (sin copiar y pegar!!)
      */

      /*
      $cantidadDeAlumnos = 1;
      if ($cantidadDeAlumnos) {
        echo "true";
      }else{
        echo "false";
      }
      */

      /*
      Definir una variable $numero con un número. Imprimir “El número es par” si lo es o “El número es impar” si no lo es. Se pide resolver este ejercicio con un if ternario (operadores  ?  :)
      */

      // $numero = 2;
      // echo $retVal = (($numero%2)==0) ? "El numero es par" : "El numero es impar" ;
      /*
      Crear una variable $nota con un valor del 0 al 10. Utilizando un switch generar la siguiente lógica:

      Si la nota es menor a 4 imprimir “desaprobado”
      Si la nota es 4 o 5 imprimir “zafamos”
      Si la nota este entre 6 y 8 imprimir “Bien!!!”
      Si la nota es un 9 imprimir “MUY bien!!”
      Si la nota es un 10 imprimir “Excelente!!!!!”
      */
      $nota = -1;
      switch ($nota) {
        case 0:
        case 1:
        case 2:
        case 3:
          echo "Desaprobado";
          break;
        case 4:
        case 5:
          echo "Zafamos";
          break;
        case 6:
        case 7:
        case 8:
          echo "Bien!!!";
          break;
        case 9:
          echo "Muy bien!";
          break;
        case 10:
          echo "excelente!";
          break;
        default:
          echo "El numero no es valido";
          break;
      }
     ?>
  </body>
</html>
