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
Descritivo: Exercício 19 - Ler uma string correspondente a uma data no formato
            ddmmaa (6 dígitos, ex: 250826) e exibir o dia, mês e ano separadamente
*******************************************************************************/

echo "Digite a data no formato ddmmaa (ex: 250826): ";
$data = trim(fgets(STDIN));

// Extrai os dois primeiros caracteres como dia, os dois seguintes como mês
// e os dois últimos como ano, usando substr()
$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

echo "Dia = $dia" . PHP_EOL;
echo "Mês = $mes" . PHP_EOL;
echo "Ano = $ano" . PHP_EOL;
