<?php

$tableauEntier = [1, 4, 12, 6, 24, 0, 2];

asort($tableauEntier);

foreach($tableauEntier as $number){
    echo $number . "     ";
}

$tableau = [1, 4, 12, 6, 24, 0, 2];
$tableau_range = [];

echo "<br>";

for($i = count($tableauEntier); $i > 0 ; $i--){//Pour palier le problème, on peut aussi utiliser le foreach
    $min = min($tableauEntier);
    $tableau_range[] = $min;
    $key = array_search($min, $tableauEntier);
    unset($tableauEntier[$key]); 
}


foreach($tableau_range as $number){
    echo $number . "     ";
}

?>