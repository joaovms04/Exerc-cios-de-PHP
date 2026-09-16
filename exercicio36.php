<?php

/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Alunos:      26008802-2 -  João Marchezan
             26011979-2 -  Rafael.K
             26009345-2 -  vithor do carmo
             26008950-2 -  Vinicius de Medeiros
             26013906-2 -  lucas Gabriel
             26010098-2 -  Rafael José Dos Santos
Descritivo: Calcula o valor da conta de energia elétrica de um consumidor,
considerando o preço do kWh, a quantidade consumida e a taxa mínima.
******************************************************************************/

$codigo = readline("Digite o código do consumidor: ");
$precoKwh = (float) readline("Digite o preço do kWh: R$ ");
$quantidadeKwh = (float) readline("Digite a quantidade de kWh consumida: ");

$total = $precoKwh * $quantidadeKwh;

if ($total < 11.20) {
    $total = 11.20;
}

echo "Código do consumidor: " . $codigo . PHP_EOL;
echo "Total a pagar: R$ " . number_format($total, 2, ',', '.');

?>