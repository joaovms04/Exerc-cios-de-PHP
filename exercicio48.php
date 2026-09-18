<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes: 
 RA - Nome completo 1
 RA - Nome completo 2
 RA - Nome completo 3
 RA - Nome completo 4
 RA - Nome completo 5
Data: 18 de Setembro de 2026
Descritivo: Exercício 48 - Ler três números reais e exibir o maior deles
*******************************************************************************/

echo "Digite o primeiro número real: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o segundo número real: ";
$n2 = (float) trim(fgets(STDIN));

echo "Digite o terceiro número real: ";
$n3 = (float) trim(fgets(STDIN));

// Utiliza a função max() para obter o maior valor entre os três números
$maior = max($n1, $n2, $n3);

echo "O maior número é: $maior" . PHP_EOL;
