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
Descritivo: Implementar uma calculadora básica que leia dois números reais e um
operador ('+', '-', '*' ou '/'), efetue o cálculo e exiba o resultado.
*******************************************************************************/

/*
 * Explicação: o switch escolhe a operação de acordo com o caractere digitado e a
 * divisão só é executada depois de conferir se o segundo número é diferente de zero.
 */

echo "Digite o primeiro número: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite o operador (+, -, * ou /): ";
$operador = trim(fgets(STDIN));

echo "Digite o segundo número: ";
$n2 = (float) trim(fgets(STDIN));

switch ($operador) {
    case "+":
        echo $n1 . " + " . $n2 . " = " . ($n1 + $n2) . PHP_EOL;
        break;

    case "-":
        echo $n1 . " - " . $n2 . " = " . ($n1 - $n2) . PHP_EOL;
        break;

    case "*":
        echo $n1 . " * " . $n2 . " = " . ($n1 * $n2) . PHP_EOL;
        break;

    case "/":
        if ($n2 == 0) {
            echo "ERRO: não é possível dividir por zero." . PHP_EOL;
        } else {
            echo $n1 . " / " . $n2 . " = " . ($n1 / $n2) . PHP_EOL;
        }
        break;

    default:
        echo "ERRO: operador inválido. Utilize +, -, * ou /." . PHP_EOL;
}
