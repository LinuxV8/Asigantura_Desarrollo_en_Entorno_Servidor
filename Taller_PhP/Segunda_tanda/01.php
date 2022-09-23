<?php

$dato =8934;
elMayor(6,2,$dato);

echo $dato;
function elMayor($A,$B,&$C){

    if ($A>$B){
        $C=$A;
        
    }else{
        $C=$B;
        
    }
}

?>