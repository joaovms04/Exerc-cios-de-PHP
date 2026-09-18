<?php

$reais = (float) readline("Digite o valor em reais: ");
$cotacao = (float) readline("Digite a cotação do dólar: ");

$dolares = $reais / $cotacao;

echo "Valor em dólares: US$ " . number_format($dolares, 2, ',', '.');
// Este código pega um valor em REAL e faz adivisão pelo preço do dolar.
?>