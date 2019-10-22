<?php

echo "Funções <br>";

echo "<br>";

// 3. Gerar um arquivo chamado ​incluir.php​ que retorne um ​echo​ com a seguinte string “Sou incluir.php”.
// a. Incluir no arquivo,​cumprimento.php​.O que acontece?
// b. Substituir ​include​ por ​require.​ O que acontece?
// c. Gerar na mesma pasta um arquivo ​cumprimento.php​ que faça
// somente ​echo​ “Olá, Mundo”. O que acontece agora com o ​ponto a​ e
// o ​ponto b​?
// d. No arquivo​ incluir.php,​substituir o​ require​ por​ include​,e incluir 3
// vezes o mesmo arquivo. O que acontece?
// e. O arquivo​ incluir.php,​substituir todosos​ include​ por​ include_once​.
// O que acontece?

// item a    
    // include ('cumprimento.php'); // gera warning, quando não existe cumprimento.php
    // item b
    // require ('cumprimento.php'); // gera fatal error, quando não existe cumprimento.php
    // item d - inclui o echo do cumprimento.php 3 vezes
    // include ('cumprimento.php'); 
    // include ('cumprimento.php'); 
    // include ('cumprimento.php'); 
    // item e - inclui o echo do cumprimento.php 1 única vez
    // include_once ('cumprimento.php'); 
    // include_once ('cumprimento.php'); 
    // include_once ('cumprimento.php'); 
