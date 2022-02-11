<?php

    function estPair($n){
        if($n%2 == 0){
            return "Le nombre " . $n . " est un nombre pair.";
        }else{
            return "Le nombre " . $n . " est un nombre impair.";
        }
    }

    echo estPair(6);
    echo "<br>";
    echo estPair(5);

?>