<?php
$json_string = '{
    "nombre": "Lorena",
    "edad": 46,
    "ciudad": "La Rioja"
}';
//convert JSON string to PHP array
$data = json_decode($json_string, true);  
//check if the conversion was successful
if ($data === null) { 
    echo 'Error parsing JSON';
} else {
    //access the values in the array
    echo 'nombre: ' . $data['nombre'] . '<br>';
    echo 'edad: ' . $data['edad'] . '<br>';
    echo 'ciudad: ' . $data['ciudad'] . '<br>';
}
?>