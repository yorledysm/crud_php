<?php
session_start(); // Estoy llamando mi cadena de conexion 

$conn = mysqli_connect(
   'localhost',
   'root',
   '',
   'bddatos'

);

 //Para verivicar si esta conetada 
/*if(isset($conn)){
    echo 'La base de datos esta conetada';
}
*/
?>