<?php
//variables
$letras = "hola";
$boleano = True;
$num = 1;
$sallyTieneMiedo = 10<9;
//array simple
$unArray = ["hola",true,false,[1,2,3],'lala'];
//            0     1     2      3       4
// por defecto xampp busca un archivo llamado "index" este es el que setea para comenzar
// si no lo encuentra habre una raiz de los componentes de la carpeta direccionada


//array asociativo
$arrayAsociativo = [
  'nombre' => "Sally",
  'anios' => 5,
  'tieneMiedo' => false,
  'numeros' => [1,2,3]
];
echo "Hey ! " . $letras;
echo "<br>";
echo $num + 32;
echo "<br>";
var_dump($sallyTieneMiedo);
echo "<br>";
echo $unArray[3][1];
echo "<br>";
echo $arrayAsociativo["nombre"];
//si tenemos 2 keys en el array asociativo que se llaman igual este se reasigna, no explota pero desaparece un valor


// en una impresion el punto "." concatena y el + genera la suma de las variables
// la diferencia entre comillas simples y dobles es que puedo poner variables dentro sin concatenar con .


 ?>
