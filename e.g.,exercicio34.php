<?php

$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");

if ($num1 > $num2) {
    echo "O maior número é: " . $num1;
} elseif ($num2 > $num1) {
    echo "O maior número é: " . $num2;
} else {
    echo "Os dois números são iguais.";
}
// Este código executa o seguinte comand: Causo um número seja maior, o sistema diz que ele é o maior, agora, se ambos forem iguais, ele dirá que são iguais

?>