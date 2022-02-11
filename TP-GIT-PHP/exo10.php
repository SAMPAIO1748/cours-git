<?php

    $factoriel = 1;

    for($i = 5; $i > 0; $i--){
        $factoriel = $factoriel*$i; 
    }

    echo  $factoriel . "<br>";

    function fac($n){
    if ($n == 1) return 1;
    return $n * fac($n - 1);
    }

    echo fac(5);

?>