<?php
    $X1 = 10;
    $Y1 = 10;
    $X2 = (20 + 10) * -1;
    $Y2 = (110 - 10) / $Y1;

    if($X1 < $X2){
        echo "X1 á esquerda: ";
    } if($X1 == $X2) {
        echo "Mesmo ponto horizontal: ";
    } else {
        echo "X1 á direita: ";
    }

    if($Y1 < $Y2){
        echo "Y1 á cima";
    } if($Y1 == $Y2){
        echo "Mesmo ponto vertical";
    } else {
        echo "Y1 abaixo: ";
    }
    
?>