<?php

//modelo
class Funcionario
{
    //atributos
    public $nome = "José";
    public $telefone = "222222222222";
    public $numFilhos = 2;

    //metodos
//   function saudacao(){
//     echo "Olá Mundo";
//   }

    //   function nomeFuncionario(){
//     echo $this->nome; //this é usado para chamar um atributo 
//   }

    function telefoneFuncionario()
    {
        echo "$this->telefone"; //atencao ao usar aspas duplas nao ignora os comandos enquanto aspas simples ignoram os comando!! 
    }

    function getNumFilhos()
    {
        echo $this->numFilhos;
    }

    function setNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos;
    }

    function getNome()
    {
        echo $this->nome;
    }

    function setNome($nome)
    {
        echo $this->nome = $nome;
    }

    function getTelefone()
    {
        echo $this->telefone;
    }
    function setTelefone($telefone)
    {
        echo $this->telefone = $telefone;
    }
    function resumo()
    {
        echo "$this->nome possui $this->numFilhos filhos telefone $this->telefone";
    }

    //chamar todos os valores de variaveis
    function __get($variavel)
    {
        echo $this->$variavel;
    }

    //para atualizar os valores
    function __set($variavel, $valor)
    {
        $this->$variavel = $valor;
    }


}

//criando um novo objeto $p
$p = new Funcionario();
$p->setNome("José");
$p->setNumFilhos(5);
$p->setTelefone("2022-2222");
echo "<hr>";

//criando um novo objeto $o
$o = new Funcionario();
$o->setNome("Maria");
$o->setNumFilhos(2);
$o->setTelefone("1111-1010");
echo "<hr>";

//imprimir o objeto $p e o objeto $o
echo $p->resumo();
echo "<hr>";
echo $o->resumo();

/* em vez de usar get e set para cada variavel usamos a funcao __set e __get para todas as variaveis  */

echo $o->__get('nome');
echo "<hr>";
echo $o->__set('nome', 'Joana, Moana');
echo $o->__get('nome');
echo "<hr>";



// echo $p -> saudacao(); //-> usado para acessar uma funcao
// echo "<hr>";
// echo $p -> nomeFuncionario();
// echo "<hr>";
// echo $p -> telefoneFuncionario();
// echo "<br>";
// echo $p -> getNumFilhos();
// echo $p -> setNumFilhos(5);
// echo "<br>";
// echo $p -> getNumFilhos();
// echo "<br>";
// echo $p -> getNome();
// echo $p -> setNome("Gladson");
// echo $p -> getNome();

?>