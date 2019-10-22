<?php
echo "Bora! <br>";

echo "Condicionais <br>";

echo "<br>";

//Defina duas variáveis ​​com números e compare-as com um if para decidir qual 
//número é maior e imprima "O maior número é ​N​", onde ​N ​é o valor da variável 
//que acabou por ser maior, e outro para cobrir o caso inverso.

$numA =4;
$numB =5;

if ($numA > $numB) {
    echo "O maior numero é: ". $numA;
} else {
    echo "O Maior numero é: ".$numB;
}   

echo "<br>";

//Defina duas variáveis ​​com números e compare-as com um if para decidir qual 
// número é maior e imprima "O maior número é ​N​", onde ​N ​é o valor da variável 
// que acabou por ser maior, e outro para cobrir o caso inverso.

$num1c = rand(1,5);
if ($num1c ==3 || $num1c == 5 ) {
    echo $num1c;
} else {
    if ($num1c!=3) {
        echo "Numero não é 3";
    }
}

echo "<br>";

//Usando a variável do exercício anterior, imprima "O número NÃO é 3" no caso em 
//que a premissa é verdadeira. Caso contrário, basta imprimir o número 3.

echo "<br>";

//Usando a mesma lógica anterior gere um número entre 1 e 100, verifique se é maior 
//que 50. No caso em que é verdade, retorne "O número é maior que 50", no caso 
//de ser falso: "O número é menor que 50".

echo "<br>";


$num1c = rand(1,100);

echo "<br>";

if ($num1c > 50) {
    echo "O numero é maior que 50";
} else {
 echo "O numero é menor que 50";
}

echo "<br>";

// Gere duas variáveis, um $username e $password, ambas com strings. Valide se o 
// usuário corresponde a "admin" ea senha para "1234". Em caso afirmativo, imprima 
// "Bem-vindo!", Caso contrário, imprima que há um erro no login.
// a. Utilizando ainda as condicionais valide se o erro está no usuário, na senha 
// ou se algum dos campos ainda está vazio.


$username = "admtin";
$password = "1234";

if ($username == "admin" && $password == "1234") {
    echo "Bem vindo <br>";
} elseif ($username == NULL || $username == NULL) {
    echo "Algum input está vazio";
} elseif ($username!== "admin"){
    echo "Erro de usuário";
} elseif ($password !== "1234"){
    echo "Erro de password";
}

echo "<br>";    


// Teremos 3 variáveis: idade (um número), casado (um booleano) e sexo (string que 
// pode ser "masculino", "feminino" ou "outro"). Se a pessoa tiver mais de 18 anos 
// de idade e não for casada, a mensagem "Bem-vindo" será impressa.
// a. Vamos modificar o exercício anterior para também imprimir bem-vindo se o sexo
//  for "Outro", independentemente do restante das condições.

$idade = 27;
$casado = true ;
$sexo = "feminino" ;

if ($idade > 18 && $casado == false ) {
    echo "Bem-vindo";
}

echo "<br>";   
// Defina uma variável ​$number​ com um número. Imprimir "O número é par" se for ou 
// "O número for ímpar", se não for. Tentar utilizar if ternário.

$number= 3;

echo $number%2==0 ? "O número é par" : "O numero é ímpar";

echo "<br>";  

// Crie uma variável ​$nota​ com um valor de 1 a 10. Usando um ​switch​ ​gerar a seguinte lógica:
//     - Se a nota for menor que 4 imprima "Aluno reprovado"
//     - Seanotafor4ou5print"Narisca"
//     - Se a nota estiver entre 6 e 8 print "Bom !!!"
//     - Seanotaforum9print"MUITOBOM!!"
//     - Se a nota é uma impressão 10" Excelente !!!!! "

$nota = rand (1,11);

switch ($nota) {
    case 1:
    echo "Aluno reprovado";
    break;
    case 2:
    echo "Aluno reprovado";
    break;
    case 3:
    echo "Aluno reprovado";
    break;
    case 4:
    echo "Na risca";
    break;
    case 5:
    echo "Na risca";
    break;
    case 6:
    echo "Bom";
    break;
    case 7:
    echo "Bom";
    break;
    case 8:
    echo "Bom";
    break;
    case 9:
    echo "Muito Bom!!";
    break;
    case 10:
    echo "Excelente!!!!!";
    break;
    case 11:
    echo "O numero não é valido";
    break;

}   

// Adicione ao anterior mude uma mensagem caso a nota não seja um número de 1 a 10 
// dizendo" O número não é válido ".