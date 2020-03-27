/*
* Crear un archivo HTML y vincular el mismo con un archivo app.js, dentro del mismo crear:

un objeto literal estudiante con las siguientes propiedades y sus valores:
nombre (String)
curso (String)
dni (Number)
email (String)
Crear una función fromObjectToArray que reciba un parámetro, será un objeto literal, y que retorne los valores de cada una de las propiedades de ese objeto en un Array.
Mostrar en consola el Array que retorna esa función.

Crear una función cambiarColorDeFondoDelBody. Que reciba como parámetro un String (nombre del color ó valor hexadecimal) y que cambie el color de fondo de la etiqueta <body>. El cambio sólo deberá realizarse, si el valor pasado como parámetro es diferente a green ó #0f0 ó #00ff00. Si el cambio de color es posible, la función retornará true. De lo contrario retornará false.
*
Ejecutar la función y pasarle como parámetros diferentes valores.
Mostrar en consola si el cambio de color fue posible.

Dentro del documento HTML, crear al menos 10 párrafos (<p>) con texto aleatorio.
Dentro de app.js capturar todos los párrafos del documento.
Hacer una función que, tomando como parámetro a los párrafos capturados previamente. Recorra los mismos y:
Les cambie el color de tipografía a rojo.
Genere que la tipografía esté en negrita. <--///FALTA ESTEEEEE
Defina que el texto esté con alineación al centro.
El proceso anterior deberá ejecutarse SOLAMENTE para los párrafos con número par.
La función deberá retornar la cantidad de elementos <p> que no fueron afectados con estos cambios de estilo.
Mostrar en consola: Párrafos que no se vieron afectados: N.
* */

var estudiante = {
    nombre: "lalo", 
    curso: "matematica",
    dni: 123456, 
    email: "tacachojose@gmail.com"
}

function fromObjectToArray(objeto) {
    let texto=[];

    for ( let dato in objeto){
        texto[dato] =objeto[dato];
    }

    console.log(texto);
}

function cambiarColorDeFondoDelBody(valor) {
    if(valor !== "green" && valor !== "#0f0" && valor !== "#00ff00"){
        document.querySelector('body').style.backgroundColor = valor;
        return console.log(true);
    }
    return console.log(false);
}

var cantidadDeParrafos = document.querySelectorAll('p');
function cambiarTexto(){
     var numero = 0;
    for (let i = 0; i< cantidadDeParrafos.length; i++){
        if(i%2==0){
            var x = cantidadDeParrafos[i];
            x.style.color = "red";
            //x.style.font.bold();
            x.style.textAlign = "center";
        }else{
            numero++;
        }
    }
    return console.log(numero+ " no se vieron afectados");
}