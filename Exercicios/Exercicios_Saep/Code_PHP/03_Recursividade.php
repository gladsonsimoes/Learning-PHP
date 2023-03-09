<?php
    function inicio(){
        $parametro = 6;
        echo "Resultado:".func1($parametro); //func1 recebe o valor de parametro 
    }

    function func1($numero){ //a variavel numero faz referencia da variavel parametro da funcao inicio
        //retornar de acordo com o numero recebido 
        if($numero == 0){
            return 1;
        } else { 
            if ($numero < 0){
                return -1;
            } else {
                return $numero * func1($numero -1);
            }
        }
    }

    inicio(); //retornara 720
?>