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
Descritivo: Exercício 57 - Ler dia, mês e ano de uma data separadamente e
            informar se ela é válida, considerando a ocorrência de anos bissextos
*******************************************************************************/

echo "Digite o dia: ";
$dia = (int) trim(fgets(STDIN));

echo "Digite o mês: ";
$mes = (int) trim(fgets(STDIN));

echo "Digite o ano: ";
$ano = (int) trim(fgets(STDIN));

$valida = true;

// Verifica se o mês informado está dentro do intervalo válido (1 a 12)
if ($mes < 1 || $mes > 12) {
    $valida = false;
} else {
    // Quantidade de dias de cada mês em um ano não bissexto
    $diasNoMes = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    // Um ano é bissexto se for divisível por 4 e (não divisível por 100
    // ou divisível por 400)
    $bissexto = ($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0);

    // Ajusta fevereiro para 29 dias caso o ano seja bissexto
    if ($bissexto) {
        $diasNoMes[1] = 29;
    }

    // Verifica se o dia informado é válido para o mês em questão
    if ($dia < 1 || $dia > $diasNoMes[$mes - 1]) {
        $valida = false;
    }
}

if ($valida) {
    echo "Data válida!" . PHP_EOL;
} else {
    echo "Data inválida!" . PHP_EOL;
}
