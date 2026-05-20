<?php 

$nota = readline("Insira sua nota: ");

 if ($nota >= 6) {
    echo "Você foi aprovado!";
}
elseif ($nota >= 5) {
    echo "Você está de recuperação.";
}
 elseif ($nota < 0) {
    echo "Essa nota é inexistente.";
}
    else { 
    echo "Você foi reprovado.";
    }
    ?>

    <?php

    $idade = readline("Digite sua idade");

if ($idade >=18){
    echo "Essa idade: $idade, é maior de idade";
}