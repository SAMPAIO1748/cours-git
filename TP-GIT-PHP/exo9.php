<?php

    function estPair($n){
        if($n%2 == 0){
            return true;
        }else{
            return false;
        }
    }


    $som = 0;
    $count = 0;
    for($i = 1; $i <=60; $i++){
        if(estPair($i)){
            $som = $som + $i;
        }
    }
    echo $som . "<br>";

    $som1 = 0;
    $count = 0;
    for($i = 1; $count < 30; $i++){
        if(estPair($i)){
            $som1 = $som1 + $i;
            $count += 1;
        }
    }
    echo $som;


?>