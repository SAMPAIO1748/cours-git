<?php

    $tableauEntier = [3, 4, 12, 6, 24, 2, 23];

    echo min($tableauEntier);


    // Principe de fonctionnement de la fonction min()
    $min = $tableauEntier[0];

    foreach($tableauEntier as $nombre){
        if($nombre < $min){
            $min = $nombre;        }
    }
    echo "<br>" . $min;
?>