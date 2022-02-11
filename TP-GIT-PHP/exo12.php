<?php

    function timeS($d){
    echo "Durée en secondes : " .  $d . "s<br>";
    $s = $d%60;
    $m = ($d-$s)/60;
    $min_rest = $m%60;
    $h = ($m - $min_rest)/60;
    echo "Durée en heures, minutes et secondes : " . $h . "h" . $min_rest . "min" . $s . "s <br>";
    }
    
    echo timeS(347872);
    echo timeS(17486);
    echo timeS(456789);


?>