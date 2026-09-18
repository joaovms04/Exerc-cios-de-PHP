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
Descritivo: Exercício 13 - Ler dois números inteiros e exibir a média aritmética
            simples entre eles
*******************************************************************************/

echo "Digite o primeiro número inteiro: ";
$num1 = (int) trim(fgets(STDIN));

echo "Digite o segundo número inteiro: ";
$num2 = (int) trim(fgets(STDIN));

// Calcula a média aritmética simples entre os dois números lidos
$media = ($num1 + $num2) / 2;

echo "Média = $media" . PHP_EOL;
