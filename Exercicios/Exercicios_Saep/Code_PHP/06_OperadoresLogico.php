<?php

$n1 = 10;
$n2 = 0;
$media;

echo ("Informa a 1 Nota: ".$n1);
// sscanf($n1);

echo ("<br> Informe a 2 Nota: ".$n2);
// sscanf($n2);

if (($n1>=0) && ($n1<=10) && ($n2>=0) && ($n2<=10)){
    $media = ($n1 + $n2) / 2;
    echo ("<br> A média das notas é: ".$media);
} else {
    echo ("<br> Uma das notas fornecidas é inválida!");
}

?>