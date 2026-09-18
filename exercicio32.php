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
Descritivo: Ler um número real e informar se ele é positivo, negativo ou nulo.
*******************************************************************************/

/*
 * Explicação: uma condicional composta (if / elseif / else) compara o número com
 * zero e seleciona uma das três mensagens possíveis.
 */

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

if ($numero > 0) {
    echo "O número " . $numero . " é POSITIVO." . PHP_EOL;
} elseif ($numero < 0) {
    echo "O número " . $numero . " é NEGATIVO." . PHP_EOL;
} else {
    echo "O número é NULO (igual a zero)." . PHP_EOL;
}
