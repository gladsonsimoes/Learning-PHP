<?php
    $B = 0;
    $A = 1;

    while ($B < 10){
        if($A > 4){
            $A = $A + 2;
            $B = $B + 1;
        } else {
            $A = $A + 1;
            $B = $B + 2;
        }
    }

    echo "A é iqual a: ".$A;
    echo "<br>";
    echo "B é igual a: ".$B;
?>