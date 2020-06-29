<?php

include "../Helper/Utilities.php";

session_start();


$Estudiantes = $_SESSION['Estudiantes'];

if(isset($_GET['id'])){

    $estudianteId = $_GET['id'];

    $indiceElemento = indexElement($Estudiantes,'id',$estudianteId);

    unset($Estudiantes[$indiceElemento]);

        $_SESSION['Estudiantes'] = $Estudiantes;

 header("location: ../index.php");
 exit();
}


?>