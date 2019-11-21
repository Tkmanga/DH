<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--
    Generar un archivo llamado incluir.php que retorne un echo con el siguiente string “Soy incluir.php”.
    Incluir en incluir.php  el archivo saludo.php (el cual aún no existe). ¿Qué sucede? ¿Tira algún error?
    Reemplazar el include por require. ¿Qué sucede?
    Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b?
    En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?
    En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede?

    Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.

    Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas = 0. Luego, modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver cuánto vale $funcionesEjecutadas en cada momento. ¿Esto está permitido? ¿Qué sucede?

    En caso de que el ejercicio anterior haya fallado, modificar la variable con la palabra reservada global para que sí funcione.

    Utilizando strpos(), encontrar la posición de la primera aparición de "php" dentro de la cadena: "Me encanta php, a mi también me encanta php!"

    Tomando la maqueta de Craftsy ya armada modificar el ejercicio para que los siguientes recursos no esten duplicados sino que deben ser reutilizados:
    Header
    Footer
    Hojas de estilos (Elementos repetidos en <head>)

    Agregar además soporte en Craftsy para que los artículos provengan de un Array similar a como lo hicimos en Kitchening.

    Modificar el array de artículos para que además tengan un “precio”

    Generar una función descripcionLarga que dado un artículo devuelva un String que tenga la descripción del artículo y el precio.

    Modificar la maqueta para que en el espacio donde se imprimen las descripciones de los artículos se imprima la descripcionLarga

    Agregar un valor booleano a los “articulos” que sea “estaEnOferta”. Si el artículo está en oferta se le hace un 20% de descuento al precio original. Generar una función para calcular los precios finales y mostrarlos en la visualización del usuario.
  -->
  </body>
</html>
