<?php

    $a = 5;
    $b = 10;
    $c;

    echo "La valeur de a est : " . $a . ", la valeur de b est : " . $b . '<br>';

    $c = $a;
    $a = $b;
    $b = $c;

    echo "La nouvelle valeur de a est : " . $a . ", la nouvelle valeur de b est : " . $b;


?>