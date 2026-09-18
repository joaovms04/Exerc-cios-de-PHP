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
Descritivo: Exercício 31 - Ler um número inteiro e exibir se ele é PAR ou ÍMPAR
*******************************************************************************/

echo "Digite um número inteiro: ";
$num = (int) trim(fgets(STDIN));

// Verifica o resto da divisão por 2: se for 0, o número é par
if ($num % 2 == 0) {
    echo "$num é PAR" . PHP_EOL;
} else {
    echo "$num é ÍMPAR" . PHP_EOL;
}
