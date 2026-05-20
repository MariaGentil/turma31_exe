<?php
 
 echo "Olá, mundo!";
?>

<?php
$nome = "Maria";

echo "Olá, meu nome é $nome\n";

$nome = "Davi";

echo "Olá, meu nome é $nome"; 
?> 

<?php 

$peso = readline("Digite seu peso:\n");

$altura = readline("Digite sua altura:\n");

$imc = $peso / ($altura ** 2);

echo "Seu imc é: $imc";
