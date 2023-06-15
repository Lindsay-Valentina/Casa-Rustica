<?php

/*La función validar_campo la usamos para validar y limpiar un campo, el tipo de parámetro que recibirá será de tipo input que es el $campo, y este campo es de tipo POST y va a retornar un string.   */
function validar_campo($campo){

    $campo = trim($campo); // se utiliza para limpiar los espacios al inicio y al final
    $campo = stripcslashes($campo); //elimiar barras inclinadas que pueden ser peligrosas para la app cuando se hace el envío por medio de formulario
    $campo = htmlspecialchars($campo); //limpia todas las etiquetas html que enviamos por el formulario como estas "<>"

    return $campo; 
}


?>