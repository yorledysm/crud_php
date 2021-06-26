<?php

include("db.php");

if(isset($_POST['guardar_tarea'])){
  

    $titulo= $_POST['titulo'];
    $description=$_POST['descripcion'];
    echo $titulo;
    echo $description;

    $query ="INSERT INTO usuario2(titulo, descripcion) values ('$titulo', '$description')";
    $resultado= mysqli_query($conn, $query);
    if(!$resultado)
    {
        die("Ohh hubo un fallo al guardar");
    }

   

    $_SESSION['message'] =' Tarea guardada con exíto';
    $_SESSION['message_type'] ='success';

    header("Location: index.php"); 
}


?>