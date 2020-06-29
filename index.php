
<?php

include "Layout/Layout.php";
include "Helper /Utilities.php";
 

session_start();

$_SESSION['Estudiantes'] = isset($_SESSION['Estudiantes']) ? $_SESSION['Estudiantes'] : array();

$listadoEstudiantes = $_SESSION['Estudiantes'];




if(!empty($listadoEstudiantes)){

  if(isset($_GET['carreraId'])){

         $listadoEstudiantes = carrera($listadoEstudiantes,'carrera', $_GET['carreraId']);
        

   }


}




?>

<?php ImprimirCabezal() ?>










</div> 

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
 <h1 class="display-4">Registro Estudiantil</h1>
 <a href="Estudiantes\Añadir.php" class="btn btn-primary">Agregar Estudiante</a>

</div>

<div class="row" style="margin-left: 15%;">
    <div class="col-md-3"></div>
    <div class="col-md-6">




<?php if(empty($listadoEstudiantes)): ?>

  <h2>Registre el estudiante aqui: <a href="Estudiantes/Añadir.php">Añadir Estudiante</a></h2>

<?php else: ?>

<div style="margin-right: 40%;"> <h5 class="text-right">Filtro</h5></div>

<div class="row ">

  <div class="col-md-6">

  <div class="btn-group ">

</div>
</div>


  <div class="row">
  <div class="col-md-9"></div>
  <div class="col-md-2"></div>

  <div class="btn-group">
  
<a href="index.php?carreraId=1"  class="btn btn-primary">Mecatronica</a>
<a href="index.php?carreraId=2"  class="btn btn-primary">Sofware</a>
<a href="index.php?carreraId=3"  class="btn btn-primary">Redes</a>
<a href="index.php?carreraId=4"  class="btn btn-primary">Multimedia</a>
<a href="index.php?carreraId=5"  class="btn btn-primary">Sonido</a>
<a href="index.php"  class="btn btn-primary">Todos</a>
  
  
  </div>
  
  
  
  </div>


<?php foreach($listadoEstudiantes as $Estudiantes): ?>

  <div class="card" style="width: 20rem;">
  <div class="card-body text-center">
    <h5 class="card-title"><?php echo $Estudiantes['nombre']?> <?php echo $Estudiantes['apellido'] ?> </h5>
   
    
    <h5 class="card-subtitle mb-2 "><?php echo Getcarrera($Estudiantes['carrera']); ?></h5>

    <h5 class="card-title text-muted"><?php echo $Estudiantes['estado'] ?></h5>

    <a href="Estudiantes/Borrar.php?id=<?php echo $Estudiantes['id'] ?>"  class="btn btn-primary">Borrar</a>
    <a href="Estudiantes/Editar.php?id=<?php echo $Estudiantes['id'] ?>" class="btn btn-warning">Editar</a>
    <div class="col-md-3"></div>
    </div>
  </div>


<?php endforeach ?>

  

<?php endif ?>
</div>
  
</div>

</body>
</html>
