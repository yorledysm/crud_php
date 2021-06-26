<?php

include("db.php");

if (isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM usuario2 WHERE id =$id";
    $resultado=  mysqli_query($conn, $query);
    if(!$resultado){
      die("Query failed"); 
    }
    $_SESSION['message']= 'La tarea se  elimino  correctamnete';
    $_SESSION['message_type']= 'danger'; 

     header("Location: index.php"); 
    

}
  

?>