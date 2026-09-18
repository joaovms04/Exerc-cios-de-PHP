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
Descritivo: Ler duas variáveis inteiras (A e B) e efetuar a troca de conteúdo entre
elas, exibindo os valores antes e depois da troca.
*******************************************************************************/

/*
 * Explicação: o valor de A é guardado em uma variável auxiliar antes de ser
 * sobrescrito, o que permite copiar B para A sem perder o conteúdo original.
 */

echo "Digite o valor de A: ";
$a = (int) trim(fgets(STDIN));

echo "Digite o valor de B: ";
$b = (int) trim(fgets(STDIN));

echo PHP_EOL . "Antes da troca..: A = " . $a . " | B = " . $b . PHP_EOL;

$aux = $a;
$a = $b;
$b = $aux;

echo "Depois da troca.: A = " . $a . " | B = " . $b . PHP_EOL;
