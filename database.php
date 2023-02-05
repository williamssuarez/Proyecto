<?php

session_start();

$conn= mysqli_connect(
    'localhost',
    'root',
    '',
    'sistema_gsi'
);
/*
ESTO PARA COMPROBAR SI LA BASE DE DATOS ESTA CONECTADA
if (isset($conn)){
    echo "la base de datos esta conectada";}
}
*/


?>