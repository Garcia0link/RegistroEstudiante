<?php 

function ImprimirCabezal($UnaPagina = false){

    $Directorio = ($UnaPagina) ? "../": "";

$Cabezal = <<<EOF

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Pricing example · Bootstrap</title>

    <link rel="canonical" href="Assets\css\bootstrap.min.css">

 
 <link href="{$Directorio}Assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" >
 <link  type="text/css" rel="stylesheet" href="{$Directorio}Assets\Css.css" >

   
    
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm ">
  <h5 class="my-0 mr-md-auto font-weight-normal">Registro De estudiantes</h5>

  <a href="{$Directorio}index.php"class=" btn-outline-primary">Home</a>

 </div>

EOF;

echo $Cabezal;

}




?>