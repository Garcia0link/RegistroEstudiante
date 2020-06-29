
<?php 

$carrera = [1 => "Mecatronica", 2 => "Software", 3 => "Redes",4 => "Multimedia", 5 => "Sonido"];





function indexElement($list,$prop,$value){

    $index = 0;
    
    foreach($list as $key => $item ){
    
        if($item[$prop] == $value){
    
            $index  = $key;
    
            
        }
    
        return $index;
    }

}

function carrera($list,$prop,$value){

$filtro = [];

foreach($list as $item ){

    if($item[$prop] == $value){

        array_push($filtro,$item);

        
    }

    return $filtro;
}

}


function Getcarrera($carreraId){


    return $GLOBALS['carrera'][$carreraId];
    
    }   

?>