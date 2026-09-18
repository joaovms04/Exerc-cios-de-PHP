<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
    26008802-2 - João Marchezan
    26011979-2 - Rafael.K
    26009345-2 - vithor do carmo
    26008950-2 - Vinicius de Medeiros
    26013906-2 - lucas Gabriel
    26010098-2 - Rafael José Dos Santos
Data: 17 de Setembro de 2026
Descritivo: Ler cinco números e exibir na tela o maior e o menor valor digitado.
*******************************************************************************/

/*
 * Explicação: o primeiro número é assumido como maior e menor; cada número seguinte
 * é comparado com eles e substitui o valor guardado quando for maior ou menor.
 */

echo "Digite o 1o número: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o 2o número: ";
$n2 = (float) trim(fgets(STDIN));

echo "Digite o 3o número: ";
$n3 = (float) trim(fgets(STDIN));

echo "Digite o 4o número: ";
$n4 = (float) trim(fgets(STDIN));

echo "Digite o 5o número: ";
$n5 = (float) trim(fgets(STDIN));

$maior = $n1;
$menor = $n1;

if ($n2 > $maior) { $maior = $n2; }
if ($n2 < $menor) { $menor = $n2; }

if ($n3 > $maior) { $maior = $n3; }
if ($n3 < $menor) { $menor = $n3; }

if ($n4 > $maior) { $maior = $n4; }
if ($n4 < $menor) { $menor = $n4; }

if ($n5 > $maior) { $maior = $n5; }
if ($n5 < $menor) { $menor = $n5; }

echo PHP_EOL . "Maior valor digitado: " . $maior . PHP_EOL;
echo "Menor valor digitado: " . $menor . PHP_EOL;
