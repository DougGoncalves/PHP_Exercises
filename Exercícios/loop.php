<?php
echo "Prática 2: <br>";
//Loop
echo "<br>"; 

//Mostra a tabela de multiplicação de 2 usando um for

$tab =2;

for($i = 1; $i <= 10; $i++){
    $res = $i * $tab; 
    echo "$i x $tab =  $res <br/>";
}

echo "<br>"; 
//Um loop while que conta de 100 a 85 (observe que, nesse caso, está diminuindo)

$num = 100;

while ($num>=85) {
    echo "$num <br>";
    $num--;
}

echo "<br>"; 
// Um loop while que dê uma variável​ $counter​ que recebe valores de 1 a 5, mostra 
// por tela duas vezes o valor de ​$counter​, ou seja, que mostra 2, 4, 6, 8, 10.

$counter =[1,2,3,4,5];

while ($counter < 6){
    echo "$counter <br>";
    $counter*2;
}

echo "<br>"; 
// 4. Utilizando um ​while​, vamos fazer um programa que puxa uma moeda (ele selecionará
//  um número aleatório que pode ser 0 ou 1) até que ele tire 5 vezes cara(o número 1).
//  Quando terminar, você deve imprimir quantas jogadas de moedas foram necessárias 
//  para obter 5 vezes a cara.
$cara = 0;
$jogadas = 0;

while($cara<5){
    $moeda = mt_rand(0,1);

    if ($moeda ==1 ){
        $cara++;
    }
    $jogadas++;
}
echo "Joguei a moeda $jogadas vezes";

echo "<br>"; 
// 5. Defina um array com 5 strings que são nomes. Passe por este array para imprimir
//  cada um dos nomes na tela.
// a. Resolva este problema com um ​for​.
// b. Resolva esse problema com o ​ while.​
// c. Resolva este problema com um do / while.
// d. Resolva este problema comum for each.
echo "<br>"; 
$arrayNomes = ["Douglas","Camila","Poison","Lelis","Amélie"];
   echo "Item a:<br>";
   for ($i=0;$i<5;$i++) {
       echo "$arrayNomes[$i] <br>";
   }
   echo "Item b:<br>";
   $i=0;
   while ($i<5) {
       echo "$arrayNomes[$i] <br>";
       $i++;
   }
   echo "Item c:<br>";
   $i=0;
   do {
       echo "$arrayNomes[$i] <br>";
       $i++;
   } while ($i<5);
   echo "Item d:<br>";
   foreach ($arrayNomes as $value) {
       echo "$value <br>";
   }
echo "<br>"; 
// 6. Defina uma array com 10 números aleatóriosentre 0 e 10. Passe por esse array para imprimir todos os números. A execução deve ser concluída se qualquer um dos números encontrados for um 5 (deve imprimir "O 5 foi encontrado!")
$arrayAleatorio1 =[];

for ($i=0; $i < 10 ; $i++) { 
    $arrayAleatorio1[$i] = mt_rand (0,10); 
} 
foreach ($arrayAleatorio1 as $value) {
        echo $value . "<br>";
        if ($value ==5 ) {
            echo "O 5 foi encontrado!";
            break;
        } 
}
echo "<br>"; 
// 7. Defina um array com 10 números aleatórios entre 0 e 100. Passe por essa matriz, 
// contando quantos números são pares.
echo "<br>"; 
$arrayAleatorio2 = []; 

for ($i=0; $i < 100 ; $i++) { 
    $arrayAleatorio2[$i] = mt_rand (0,100); 
}
foreach ($arrayAleatorio2 as $value) {
    echo $value . "<br>";
    if ($value%2==0 ) {
        echo "Os numeros listados são pares";
        break;
    } 
}
echo "<br>"; 
// 8. Definirumavariável​$mascote​ que é umarray associativo 
// a. Noíndicedeanimais,vocêdevedizerqualanimalé. 
// b. Naidadedoíndicedeveinformaraidade.
// c. No índice de altura, você deve dizer a altura.
// d. Noíndicedonome,vocêdevedizeronome
// e. Percorraosvaloresdoarraycomumaimpressãoforeach(comoum exemplo):
// animal: cão idade: 5 anos altura: 0,60 nome: Sonic
echo "<br>"; 

$mascote = [
    "animal"=> "gato",
    "idade" => "8 anos",
    "altura"=> 0.27,
    "nome"=> "Poison",
];

foreach ($mascote as $key => $value) {
    echo "$key: $value <br>";
    
};


echo "<br>"; 
// 9. Começando de um arquivo com a seguinte variável definida:
// $ceu = array ("Itália" => "Roma", "Luxemburgo" => "Luxemburgo", "Bélgica" => "Bruxelas",
// "Dinamarca" => "Copenhaga", "Finlândia" => "Helsínquia", "França" => "Paris", 
// "Eslováquia" => "Bratislava", "Eslovénia" => "Liubliana", "Alemanha" => "Berlim",
// "Grécia" => "Atenas", "Irlanda" => "Dublin", "Holanda" => "Amesterdão",
// "Portugal" => "Lisboa", "Espanha" => "Madrid", "Suécia" => "Estocolmo", 
// "Reino Unido" => "Londres", "Chipre" => "Nicósia", "Lituânia" => "Vilnius",
// "República Checa" => "Praga", "Estónia" => "Tallinn", "Hungria" => "Budapeste", 
// "Letónia" = > "Riga", "Malta" => "Valeta", "Áustria" => "Viena", 
// "Polónia" => "Varsóvia");
// Crie um script que mostre o nome da capital e o país da variável ​$ceu​. 

$ceu = ["Itália" => "Roma",
"Luxemburgo" => "Luxemburgo", 
"Bélgica" => "Bruxelas",
"Dinamarca" => "Copenhaga",
"Finlândia" => "Helsínquia",
"França" => "Paris", 
"Eslováquia" => "Bratislava",
"Eslovénia" => "Liubliana", 
"Alemanha" => "Berlim",
"Grécia" => "Atenas", 
"Irlanda" => "Dublin", 
"Holanda" => "Amesterdão",
"Portugal" => "Lisboa", 
"Espanha" => "Madrid",
"Suécia" => "Estocolmo", 
"Reino Unido" => "Londres",
"Chipre" => "Nicósia", 
"Lituânia" => "Vilnius",
"República Checa" => "Praga", 
"Estónia" => "Tallinn",
"Hungria" => "Budapeste", 
"Letónia" => "Riga", 
"Malta" => "Valeta", 
"Áustria" => "Viena", 
"Polónia" => "Varsóvia"];

foreach ($ceu as $key => $value) {
    echo "$key: $value <br>";
    
};

echo "<br>"; 
// 10. Começando de um arquivo com a seguinte variável definida:
// $ceu = [
// "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], "Brasil" => ["Brasília",
//  "Rio de Janeiro", "São Paulo"], "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"], "França" => ["Paris", "Nantes", "Lyon"],
// "Itália" => ["Roma", "Milão", "Veneza"],
// "Alemanha” => ["Munique", "Berlim", "Frankfurt"]
// ];
//  Crie um script que mostre o nome de cada país e suas cidades da variável ​$ceu 
//  com o seguinte formato:
// As cidades da Argentina são:
// ● Buenos Aires
// ● Córdoba
// ● Santa Fé
// As cidades do Brasil são:
// ● Brasília
// ● Rio de Janeiro
// ● São Paulo

$ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], 
    "Brasil" => ["Brasília","Rio de Janeiro", "São Paulo"], 
    "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"], 
    "França" => ["Paris", "Nantes", "Lyon"],
    "Itália" => ["Roma", "Milão", "Veneza"],
    "Alemanha" => ["Munique", "Berlim", "Frankfurt"],
];


foreach ($ceu as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $index => $valor) {
            echo "As cidades da $key são: <li>$valor</li>  <br>";
      }
    }
}
echo "<br>"; 

// 15. Do exercício anterior:
// ● Adicione a cada país um dado extra, além de suas cidades chamadas eAmericano.
//  Este valor deve ser verdadeiro ou falso.
// ● Faça com que a impressão anterior não mostre países que não sejam americanos.
// IMPORTANTE: Para que isso funcione de maneira simples, você deve criar uma matriz
//  associativa para cada país em que cada país terá os dados de suas cidades
//   e seja americano.
$ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], 
    "Brasil" => ["Brasília","Rio de Janeiro", "São Paulo"], 
    "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"], 
    "França" => ["Paris", "Nantes", "Lyon"],
    "Itália" => ["Roma", "Milão", "Veneza"],
    "Alemanha" => ["Munique", "Berlim", "Frankfurt"],
];

$ceu["Argentina"][] = "Mendoza";
$ceu["Brasil"][] = "Salvador";
$ceu["Colômbia"][] = "Medellín";
$ceu["França"][] = "Caen";
$ceu["Itália"][] = "Florença";
$ceu["Alemanha"][] = "Hamburgo";


foreach ($ceu as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $index => $valor) {
            echo "As cidades da $key são: <li>$valor</li>  <br>";
      }
    }
}
