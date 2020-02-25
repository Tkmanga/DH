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
