<?php
    $a_endegre = 180;
    $a = deg2rad($a_endegre);

    $x = cos($a);
    $y = sin($a);

    echo "Les coordonnées du point P sont x = " . $x . " , y = " . $y . " . ";

?>