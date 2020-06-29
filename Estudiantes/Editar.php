
<?php

include "../Layout/Layout.php";
include "../Helper/Utilities.php";

session_start();

if(isset($_GET['id'])){

  $EstudianteId = $_GET['id'];

  $_SESSION['Estudiantes'] = isset($_SESSION['Estudiantes']) ? $_SESSION['Estudiantes'] : array();


  $Estudiantes = $_SESSION['Estudiantes'];    


  $elemento = carrera($Estudiantes,'id', $EstudianteId)[0];
  $indexElemento = indexElement($Estudiantes,'id', $EstudianteId);


  if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['carrera']) && isset($_POST['estado']) ) {

  
   
 
 
    $EstudianteId = 1;

      if(!empty($Estudiantes)){
          
          $countList = count($Estudiantes);

          $lastElement =  $Estudiantes[$countList - 1];

          $ultimoElemento = $lastElement;
          $EstudianteId = $ultimoElemento['id'] + 1;

      }

    array_push($Estudiantes,
    ['id' => $EstudianteId,
    'nombre' => $_POST['nombre'],
    'apellido' => $_POST['apellido'],
    'estado' => $_POST['estado'],
    'carrera' => $_POST['carrera']
    ]);

   
    

    $_SESSION['Estudiantes'] = $Estudiantes;
    
    header("Location: ../index.php"); 
    exit();

}

  }
  
  





?>

<?php ImprimirCabezal(true) ?>


<link  href="../Assets\js\enviar.js">
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    
    <form action="Borrar.php?id=<?php echo $elemento['id']  ?>" method="POST">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" value="<?php $elemento['nombre'] ?>" class="form-control" id="nombre" name="nombre" >
    
  </div>
  <div class="form-group">
    <label for="apellido">Apellido</label>
    <input type="text" value="<?php $elemento['apellido'] ?>" class="form-control" id="apellido" name="apellido">
  </div>

  <div class="form-group">
   
    <label for="carrera">Carrera</label>
   
    <select class="form-control" id="carrera" name="carrera">
   
     <?php foreach($carrera as $id => $text): ?>  
   
           
        <?php if($id === $elemento['carrera']): ?>

          <option selected value="<?php echo $id; ?>"> <?php echo $text; ?> </option>


        <?php else: ?>
         
          <option value="<?php echo $id; ?>"> <?php echo $text; ?> </option>

        <?php endif; ?>

          
          

     <?php endforeach ?>
   
    </select>
  </div>



  <div class="form-group form-check" style="display: none;">
    <input type="checkbox" class="form-check-input" id="estado" name="estado" checked value="activo" >
    <label class="form-check-label"  for="estado">Estado(Activo Por Defoult)</label>
  </div>
  


  <button type="submit" class="btn btn-primary text-center">Agregar</button>
</form>
    
    
    </div>
    <div class="col-md-3"></div>
</div>






</body>
</html>
