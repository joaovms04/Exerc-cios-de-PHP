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
Descritivo: Exercício 54 - Ler um número inteiro entre 1 e 7 e mostrar o dia
            da semana correspondente (1 -> Domingo, 4 -> Quarta-feira, etc.)
*******************************************************************************/

echo "Digite um número entre 1 e 7: ";
$num = (int) trim(fgets(STDIN));

// Usa switch/case para mapear o número ao nome do dia da semana
switch ($num) {
    case 1:
        $dia = "Domingo";
        break;
    case 2:
        $dia = "Segunda-feira";
        break;
    case 3:
        $dia = "Terça-feira";
        break;
    case 4:
        $dia = "Quarta-feira";
        break;
    case 5:
        $dia = "Quinta-feira";
        break;
    case 6:
        $dia = "Sexta-feira";
        break;
    case 7:
        $dia = "Sábado";
        break;
    default:
        $dia = "Número inválido";
        break;
}

echo "Dia da semana: $dia" . PHP_EOL;
