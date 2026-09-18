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
Descritivo: Exercício 42 - Ler um número inteiro e informar se ele é divisível
            por 3 e por 7 simultaneamente
*******************************************************************************/

echo "Digite um número inteiro: ";
$num = (int) trim(fgets(STDIN));

// Verifica se o número é divisível por 3 e por 7 ao mesmo tempo
if ($num % 3 == 0 && $num % 7 == 0) {
    echo "$num é divisível por 3 e por 7 simultaneamente" . PHP_EOL;
} else {
    echo "$num NÃO é divisível por 3 e por 7 simultaneamente" . PHP_EOL;
}
