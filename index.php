<?php  include("db.php")?> <!-- para conectarme a la base de datos-->

<?php include("incluides/header.php")?>



<div class="container p-4">
   <div class="row">   <!--creando las filas-->
   
      <?php  if(isset($_SESSION['message'])) { ?>
         <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
         <?= $_SESSION['message'] ?>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
         </div>

      <?php  session_unset(); } ?>
      <div class="col-md-4"> 
      <div class="card card-body">
         <form action="guardar_tarea.php" method="POST">
           <div class="form-group">
               <input type="text" name="titulo" class="form-control" 
               placeholder="Tarea titulo" autofocus="">
           
           </div>
           <div class="form-group">
              <textarea name="descripcion"  rows="2" class="form-control"
              placeholder=Tarea-descreption></textarea>
           
           </div>
           <input type="submit" class=" btn  btn-success   btn-block  form-control " name="guardar_tarea"
           value="Guardar tarea" >
         </form>
      
      </div>


      </div>

      <div class="col-md-8"><!--creando la tabla-->
      <table class="table table-bordered">
      <thead>
        <tr>
         <th>Titulo</th>
         <th>Descripción</th>
         <th>Fecha de creación</th>
         <th>Acciones</th>
        </tr>
      </thead>
       <tbody>
       <!--Para consultar  -->
       <!-- mysqli_query($conn, $query ); me va devolver la varables que  estoy almacendo -->
         <?php  
         $query = "SELECT * FROM  usuario2";
         $result_tarea =  mysqli_query($conn, $query );  
        
          
         while($row = mysqli_fetch_array($result_tarea )){ ?>

           <tr>
                <td><?php  echo $row['titulo'] ?> </td>
                <td><?php  echo $row['descripcion'] ?> </td>
                <td><?php  echo $row['fecha_tarea'] ?> </td>
                <td>
               <a href="editar_tarea.php?id=<?php echo $row['id'] ?> " class="btn btn-secondary">
                <i class="fas fa-marker"></i>

             </a>
             <a href="eliminar_tarea.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                
             <i class="fas fa-trash-alt"></i>
               
             </a>
             </td>
            </td>
           </tr>
           

          <?php    }?>
     
        
       </tbody>
      </table>
      
      </div>
   </div>

</div>

<?php  include("incluides/footer.php")  ?>


