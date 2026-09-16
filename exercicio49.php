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
Descritivo: Lê três números e os exibe em ordem crescente e posteriormente
em ordem decrescente.
******************************************************************************/

$numero1 = (float) readline("Digite o primeiro número: ");
$numero2 = (float) readline("Digite o segundo número: ");
$numero3 = (float) readline("Digite o terceiro número: ");

$numeros = [$numero1, $numero2, $numero3];

sort($numeros);

echo "Ordem crescente: ";
echo $numeros[0] . " - " . $numeros[1] . " - " . $numeros[2] . PHP_EOL;

echo "Ordem decrescente: ";
echo $numeros[2] . " - " . $numeros[1] . " - " . $numeros[0];

?>