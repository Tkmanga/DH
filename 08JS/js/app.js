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
/*
var a = "asd";
var b = ["uno","dos","tres"];
var c = false;
*/
//console.log(a);
//console.log(b);
//console.log(c);
/*
var arrayNumerosimpares = [];
var contador = 0;

for (var i = 0; i <= 137; i++) {
  if (i%2!=0) {
    arrayNumerosimpares[contador] = i;
    contador++;
  }
}
*/
//console.log(arrayNumerosimpares);

//OBJETOS LITERALES
/*
* Objetos Literales

Dentro del archivo app.js del punto anterior, crear:
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

<<<<<<< HEAD
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
=======
>>>>>>> 671ce11e63dc706baae95743bc5b063cd1648f89
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
<<<<<<< HEAD
=======
*
>>>>>>> 671ce11e63dc706baae95743bc5b063cd1648f89
Dentro del archivo app.js crear un objeto literal misDatos. Tu información personal deberá ser parte de sus propiedades:
nombre
apellido
dni
comidaFavorita
edad
Deberás recorrer el anterior objeto con un for in y mostrar por consola cada uno de las propiedades junto con sus valores.
Implementar el método saludar() en el objeto misDatos, que al ser invocado retorne un string así: "Hola mi nombre es NOMBRE APELLIDO y tengo EDAD años". Imprimir su invocación en consola.
<<<<<<< HEAD
*
* */
=======

* */

/*
>>>>>>> 671ce11e63dc706baae95743bc5b063cd1648f89
var ironMan = {
  nombre:"ironMan",
  equipo:"Avengers",
  poderes:["Volar","Lanzar misiles","Disparar laser"],
  energia:100,
  getPoder:function(numero){
    switch (numero) {
      case 0:
        this.energia -= 10;
        break;
      case 1:
        this.energia -= 15;
        break;
      case 2:
        this.energia -= 25;
        break;
    }
    return this.poderes[numero]+" energia: "+this.energia;

  }
}


var hulk = {
  nombre : "Hulk",
  equipo : "Avengers",
  poderes : ["Aplastar","Gritar","Golpear"],
  energia : 100,
  getPoder:function(numero){
    switch (numero) {
      case 0:
        this.energia -= 10;
        break;
      case 1:
        this.energia -= 15;
        break;
      case 2:
        this.energia -= 25;
        break;
    }
    return this.poderes[numero]+" energia: "+this.energia;
  }
}

  var numeroRandom = Math.floor(Math.random() * Math.floor(3));

  console.log(ironMan.getPoder(numeroRandom));
  console.log(hulk.getPoder(numeroRandom));

var misDatos = {
  nombre: "jose",
  apellido: "tacacho",
  dni: 38285404,
  comidaFavorita: "Pizza",
  edad: 25,
  saludar:function () {
    return "Hola mi nombre es: "+this.nombre+" "+this.apellido+" y tengo: "+ this.edad +" años";
  }

}
for (const dato in misDatos){
  if (dato !='saludar'){
    console.log(dato + ": "+misDatos[dato]);
  }else{
    console.log(misDatos.saludar());
  }

}

*/


/*
D.O.M
El evento onclick() ocurre cuando un usuario clickea en el elemento seleccionado. Para probarlo brevemente vamos a crear en el index.html un <button> con  id="miBoton". Luego de ello, en el archivo app.js vamos a capturarlo en una variable botonDePrueba, luego, sobre esta variable implementar el siguiente código:
    botonDePrueba.onclick = function(){alert("Testeando el click")}
¿Qué ocurre si al ver el archivo en el navegador hacemos click?
    Aclaración:
    Para el resto de práctica vamos a utilizar el archivo en el campus con nombre html5up.zip. Concretamente trabajaremos con el archivo index.html, y el archivo main.js ubicado en la carpeta assets/js/. Recordá de utilizar window.onload para ejecutar el código de los siguientes ejercicios.

    Utilizando document.getElementById(), ocultar el elemento <h1 id="titular"> al cargar la página.
    Utilizando querySelector() hacer que la imagen de la lechuza, una vez cargada la página, se convierta en blanco y negro, podemos utilizar: elemento.style.filter = "grayscale(100%)";
    
Seleccionar el elemento con id "copyright" y mostrar en consola a dicho elemento.
    Utilizando elemento.style, cambiarle el color actual por un rojo al <h2>.
Nos piden cambiar el color a todos los íconos de la página. Recordá que estos tiene la clase “icon”.
Seleccionar el elemento con id “copyright” y mostrar en consola todos sus atributos, utilizando el método .attributes
Mostrar en consola la url a donde dirigen los botones de twitter y facebook utilizando getAttribute.
    Nos reportaron que el enlace de youtube se dirige a google, y nos piden cambiar esto con Javascript utilizando setAttribute. Hacer que de ahora en más dicho enlace llever al canal de youtube de Digital House.
    Nos informaron que el form no estaría funcionando, nos comentaron si por Javascript podíamos consultar si tenía el atributo action. Hacer esto y mostrar el resultado de dicha consulta en consola.
    Nos comentan que el programador se confundió y en vez de agregar el atributo action, agregó un atributo erroneo (url), nos piden borrarlo y agregar la url en el atributo action, todo con Javascript.

*/



window.onload = function() {
  let b = document.querySelector("button");
  b.onclick = function () {
    alert("asjñdfnhakjdsf");
  }
  let titular = document.getElementById('titular');
  titular.hidden = true;

  let imagenLechu = document.getElementById('lechuza');
  imagenLechu.style.filter = 'grayscale(100%)';

  let copyR = document.getElementById('copyright');

};