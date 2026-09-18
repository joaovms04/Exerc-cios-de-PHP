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
Descritivo: Exercício 25 - Ler uma temperatura na escala Fahrenheit e exibir o
            equivalente convertido em graus Celsius (C = 5/9 * (F - 32))
*******************************************************************************/

echo "Digite a temperatura em Fahrenheit: ";
$f = (float) trim(fgets(STDIN));

// Aplica a fórmula de conversão de Fahrenheit para Celsius
$c = (5 / 9) * ($f - 32);

echo "Temperatura em Celsius = $c" . PHP_EOL;
