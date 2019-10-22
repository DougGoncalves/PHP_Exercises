<?php

echo "Funções <br>";

echo "<br>";

// 4. Criar uma arquivo ​tudoJunto.php​ que inclua o arquivo ​funcoes.php​ e superficie.php,​ definindo uma função que receberá os raios de 3 círculos e retornará a maior superfície entre ambos. Para este exercício, devemos reutilizar as funções já definidas.
// 5. Modificar ​tudoJunto.php​ para a primeira linha diga $funcoesExecutadas = 0. Em seguida, modificar cada função de ​funcoes.php​ e ​superficie.php para que, ao começar, façam $funcoesExecutadas++. Testar invocar várias funções e ver quanto vale $funcoesExecutadas em cada momento. Isso está permitido? O que acontece?
// 6. Caso o exercício anterior tenha provocado um erro, modificar a variável com a palavra reservada ​global​ para que funcione.
// 7. Utilizando ​strpos()​, encontrar a posição da primeira aparição de "php" dentro da cadeia: "Adoro php, Eu também adoro php!"
// 8. Criar um processo executado a partir da linha de comando que:
// a. Cumprimente o usuário dizendo “Olá, Mundo”.
// b. Peça para ele inserir o nomee  depois diga“Boas-vindas,​nome​”,em
// que nome seja substituído pela informação inserida.
// c. Peça para o usuário inserir a idade. Se ele for menor de 18 anos,
// diremos “Você não está autorizado no sistema” e o programa
// terminará. Se ele for maior de 18 anos, diremos “Autorização aceita”.
// d. Criar uma função​ hobbyValido​.Essa função recebe uma string e
// retorna verdadeiro caso essa string tenha menos de 15 caracteres e
// mais de 3 caracteres.
// e. Pediremos para o usuário inserir os hobbies​ separados por vírgula​.
// f. Para cada hobby válido,
// g. dizer “​Você confirma que gosta de HOBBY?​” (a palavra H​ OBBY​ será
// substituída por cada valor inserido).
// h. Ao final, imprimir:
// Nome: João
// Idade: 25
// Hobbies: Futebol, Netflix, Sorvete

//  Só devem ser impressos os hobbies confirmados. Dica: Utilizar a função ​explode

 // item 04
 include('funcoes.php');
 include('superficie.php');
 // $funcoesExecutadas = 0;
 // global $funcoesExecutadas;
 
 $funcoesExecutadas=0; // exercício 06
 function maiorCirculo ($circ1,$circ2,$circ3) {
     global $funcoesExecutadas; // exercício 06
     $funcoesExecutadas++;
     return maior(circulo($circ1),circulo($circ2),circulo($circ3));
   
 }
 echo "<br>área círculo = ".maiorCirculo(4,3,5)." m2";
 echo "<br>Funções executadas ".$funcoesExecutadas;
 // Exercício 07
 echo "<br>"; 
 echo strpos("Adoro php, Eu também adoro php!","php");
