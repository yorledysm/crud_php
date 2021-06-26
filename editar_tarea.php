<?php
include("db.php");

//isset si  existe el id

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM usuario2 WHERE id = $id";
    $resultado = mysqli_query($conn, $query);
    if (mysqli_num_rows($resultado) == 1) {
      $row =mysqli_fetch_array($resultado);
      $titulo = $row['titulo'];
      $description= $row['descripcion'];
    }
    
}
     if(isset($_POST['update'])){
     $id = $_GET['id'];
     $titulo= $_POST['titulo'];
     $description= $_POST['descripcion'];
     // Aqui verificamos  si salen datos del cambio
     /*echo $titulo;
     echo $description;
     echo $id;*/
     $query ="UPDATE usuario2 set titulo=' $titulo', descripcion ='$description' WHERE id=$id ";
     

     mysqli_query($conn,$query);


    $_SESSION['message'] =' Tarea actulizada correctamente';
    $_SESSION['message_type'] ='warning';


    header("Location: index.php"); 
     

     }


?>

<?php include("incluides/header.php")?>


<div class="container p-4">
  <div class="row">
    <div class=" col-md-4 mx-auto">
      <div class="card card-body">
        <form action="editar_tarea.php?id=<?php echo $_GET['id']; ?>" method="POST">
           <div class="form-group">
             <input type="text" name="titulo"  value="<?php  echo $titulo; ?>"  class="form-control"   placeholder="Actualiza  el titulo">
           </div>
            <div class="form-group">
              <textarea name=" descripcion" rows="2" class="form-control" placeholder="Actualiza la descripcion"><?php echo $description;  ?> </textarea>
            
            </div>
            <button class=" btn btn-success" name="update" >
            Actulizado
            </button >
            
        </form>
      </div>
    
    </div>

 </div>
</div>

<?php  include("incluides/footer.php")  ?>






