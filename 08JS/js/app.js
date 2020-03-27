//ROMPE HIELO
/*
Crear un archivo index.html, en la misma ubicación un directorio / carpeta js y dentro de dicho directorio un archivo app.js.
Vincular el archivo app.js con el archivo index.html.
Dentro del archivo app.js generar:
una variable que contenga un string.
una variable que contenga un array.
una variable que contenga un boolean.
Hacer un console.log() de cada una de las variables anteriormente creadas.
Abrir el archivo con el navegador y verificar que en la consola de las dev tools se impriman las variables correspondientes.
Crear una variable que contenga un Array con los números impares desde el 1 hasta el 137. Para lo anterior, no se permite generar el Array manualmente, el mismo deberá generarse con sentencias de JS.
*/
var a = "asd";
var b = ["uno","dos","tres"];
var c = false;

//console.log(a);
//console.log(b);
//console.log(c);

var arrayNumerosimpares = [];
var contador = 0;

for (var i = 0; i <= 137; i++) {
  if (i%2!=0) {
    arrayNumerosimpares[contador] = i;
    contador++;
  }
}

//console.log(arrayNumerosimpares);

//OBJETOS LITERALES

/*
* Dentro del archivo app.js del punto anterior, crear:
un objeto literal ironMan con las siguientes propiedades/métodos:
nombre (String) - "Iron Man"
equipo (String) - "Avengers"
poderes (Array) - ["Volar", "Lanzar misiles", "Disparar láser"]
energía (Number) - 100
getPoder (Fn) - recibe un parámetro numérico. Retornará el poder seleccionado.
un objeto literal Hulk con las siguientes propiedades/métodos:
nombre (String) - "Hulk"
equipo (String) - "Avengers"
poderes (Array) - ["Aplastar", "Gritar", "Golpear"]
energia (Number) - 100
getPoder (Fn) - recibe un parámetro numérico. Retornará el poder seleccionado.
* 
Utilizando las funciones Math.random() y Math.floor(), generar un número entero al azar entre 0 y 2 (en relación a nuestro array de poderes) para luego poder ser utilizado como parámetro de la función getPoder().
Dicho número deberá ser pasado al método getPoder() y mostrar en consola el poder elegido. Así mismo dependiendo del poder elegido, se deberá descontar de la energía una cantidad así:
Para ironMan:
Volar, descontará 10 puntos de energía.
Lanzar misiles, descontará 15 puntos de energía.
Disparar láser, descontará 25 puntos de energía.
Para hulk:
Aplastar, descontará 5 puntos de energía.
Gritar, descontará 25 puntos de energía.
Golpear, descontará 10 puntos de energía.
Después de descontada la energía de cada superhéroe, mostrar en consola la energía final con la que quedó cada uno.
Dentro del archivo app.js crear un objeto literal misDatos. Tu información personal deberá ser parte de sus propiedades:
nombre
apellido
dni
comidaFavorita
edad
Deberás recorrer el anterior objeto con un for in y mostrar por consola cada uno de las propiedades junto con sus valores.
Implementar el método saludar() en el objeto misDatos, que al ser invocado retorne un string así: "Hola mi nombre es NOMBRE APELLIDO y tengo EDAD años". Imprimir su invocación en consola.
*
* */
var ironMan = {
  nombre:"ironMan",
  equipo:"Avengers",
  poderes:["Volar","Lanzar misiles","Disparar laser"],
  energia:100,
  getPoder:function(a){
    return "dsa";
  }
}


var hulk = {
  nombre : "Hulk",
  equipo : "Avengers",
  poderes : ["Aplastar","Gritar","Golpear"],
  energia : 100,
  getPoder : function(a){
    return "asd";
  }
}

var numeroRandom = Math.floor(Math.random() * Math.floor(3))

console.log(numeroRandom);
