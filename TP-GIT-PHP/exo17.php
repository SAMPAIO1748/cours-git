<?php

    //17.1 

    $tableauNote = [15, 16, 17, 15, 16, 20, 13, 14, 18, 19, 17, 15, 18, 14, 17, 16, 12, 20, 16, 20];

    $total_note = 0;

    foreach($tableauNote as $note){
        $total_note = $total_note + $note;
    }
    $count = count($tableauNote);
    $moyenne = $total_note/$count;
    echo "La moyenne est de : " . $moyenne;
    echo "<br>";
    echo "______________________________________________________________<br>";
    //17.2
    

    $aire_nenuphare = 15;
    echo "L'aire du nénupahre est au début de :" . $aire_nenuphare . "<br>";
    $croissance = 1.1;
    $i = 1;
    for($i=1; $aire_nenuphare < 30; $i++){
        $aire_nenuphare = $aire_nenuphare * $croissance;
    }

    $j = $i - 1;
    echo "L'aire du nénuphanre est de :" . $aire_nenuphare . "cm2<br>";
    echo "L'aire a doublé en " . $j . " jours.";

    echo "<br>";

    echo "______________________________________________________________<br>";

    //17.3

    $tableau_produit_avex_prix = [
        "t-shirt" => 55,
        "pull" => 35,
        "pantalon" => 78,
        "chemise" => 123,
    ];

    foreach($tableau_produit_avex_prix as $name => $price){
        echo $name . " , prix : "  . $price . '<br>';
    }

    echo "----------------------------------------------------------------<br>";
    
        foreach ($tableau_produit_avex_prix as $name => $price){
            if( $price <= 100 && $price > 50){
                $price = $price * 0.965;
            };
            if( $price > 100){
                $price = $price * 0.94;
            };
            if($price <= 50){
               $price;
            };
            echo $name . " , prix : "  . $price . '<br>';
        };
    
        echo "______________________________________________________________<br>";

        // 17.4

        $mon_tableau_de_mille_nombres = [];

        for($i = 0; $i < 1000; $i++){
            $mon_tableau_de_mille_nombres[$i] = rand(0, 10000);
            echo $i . " : " .  $mon_tableau_de_mille_nombres[$i] . "<br>";
        }

        echo "----------------------------------------------------------------<br>";

        echo max($mon_tableau_de_mille_nombres) ."<br>";

        echo "______________________________________________________________<br>";

        // 17.5

        $a = rand(1, 100);
        $b = rand(1, 1000);
        $c = rand(1, 100);

        // $a = 2; 
        // $b = 4;
        // $c = 2;

        $d = ($b*$b) - (4*$a*$c);
        

        $racine_d = sqrt($d);

        echo $a . "*x*x +" . $b . "*x +" . $c . " = 0";
        echo "<br> d = " . $d . "<br>";

        if($d == 0){
            $x1 = $x2 = -$b/(2*$a);
            echo "x1 = " . $x1 .' et x2 = ' . $x2;
        }elseif($d >0){
            $x1 = (-$b + $racine_d)/(2*$a);
            $x2 = (-$b - $racine_d)/(2*$a);
            echo "x1 = " . $x1 .' et x2 = ' . $x2;
        }else{
            echo "Nous ne traitons pas ce cas";
        }




?>