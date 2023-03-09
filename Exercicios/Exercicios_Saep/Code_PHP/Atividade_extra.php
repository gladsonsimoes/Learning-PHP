<?php
    $Nota1 = 6;
    $Nota2 = 10;
    $Nota3 = 0;

    $NotaMedia = ($Nota1 + $Nota2 + $Nota3) / 3;

    if($NotaMedia >= 7) {    
        echo "Parabéns, voce foi aprovado, sua média final foi: ".$NotaMedia;
    } elseif($NotaMedia < 7) {  
        echo "Infelizmente voce foi reprovado, sua média foi: ".$NotaMedia;
    } elseif($NotaMedia = 10){  
        echo "Parabéns, voce tirou 10 em todas as tres provas";
    }
?>