<?php

echo "Funções <br>";

echo "<br>";

// 1. Gerar um arquivo chamado ​funcoes.php:​
// a. Definir uma função maior() que receba 3 números e retorne o maior
// deles.
// b. Definir uma função tabela()que receba um parâmetro base,um
// parâmetro limite, e retorne um array com a sequência de números a
// partir do número base até o número limite.
// c. Definir uma variável chamada numeroMagico, que contenha um
// número. Tal variável deverá estar na primeira linha do nosso código
// PHP.
// d. Modificar maior()de forma que,se receber apenas 2 parâmetros,a
// função compare esses dois números com numeroMagico.
// e. Modificar tabela de forma que, se a receber apenas um parâmetro,
// a função use numeroMagico como limite

const numeroMagico = 50;
    function maior ($num1, $num2, $num3 = numeroMagico) {
        $arrayMaior = [$num1, $num2, $num3];
        $maiorRetorno = 0;
        foreach ($arrayMaior as $valor) {
            if ($valor>$maiorRetorno) {
                $maiorRetorno = $valor;
            }
        }
        global $funcoesExecutadas; // exercício 06
        $funcoesExecutadas++;
        return $maiorRetorno;
    }

     //echo maior(40,5,30); echo "<br>"; 
    // echo maior(30,90); echo "<br>"; // teste número mágico 
    // echo maior(30,40); echo "<br>"; // teste número mágico

    // Exercício 01 b

    function tabela ($paramBase, $paramLimite = numeroMagico) {
        if ($paramLimite>=$paramBase) {
            $j = 0;
            $arrayTabela = [];
            for ($i=$paramBase;$i<=$paramLimite;$i++) {
                $arrayTabela[$j]=$paramBase+$j;
                $j++;
            }
            echo "<pre>";
            var_dump($arrayTabela);
            return $arrayTabela; }
        else {
            $msg = "Número limite inferior a número base, não é possível executar função.";
            echo $msg;
            return $msg;
        }
    }

    // tabela (20, 20);
    // tabela (40); // teste número mágico