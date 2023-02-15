<?php


    //interface

    interface equipamentoEletronico{
        public function ligar();
        public function desligar();

    }

    //class

    class Liquidificador implements equipamentoEletronico{
        public function bater(){
            return 'Estou Batendo';
        }
        function ligar(){
            return 'Ligando';
        }

        function desligar(){
            return 'Desligando';
        }
    }

    class Computador implements equipamentoEletronico{
        public function mandarEmail(){
            return 'Enviando Email';
        }
        function ligar(){
            return 'Estou Ligando';
        }

        function desligar(){
            return 'Estou Desligando';
        }
        
    }

    class Televisao implements equipamentoEletronico{
        public function conectar(){
            return 'Conectando';
        }
        function ligar(){
            return 'Estou Ligando';
        }

        function desligar(){
            return 'Estou Desligando';
        }
    }

    //Objetos
    
    $liq = new Liquidificador();
    $pc = new Computador();
    $tv = new Televisao();




?>