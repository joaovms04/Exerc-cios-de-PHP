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
Descritivo: Declarar uma variável inteira com valor 10 e exibir o seu valor acrescido
em uma unidade, sem alterar o valor armazenado na variável original.
*******************************************************************************/

/*
 * Explicação: a soma é feita dentro do próprio echo, em ($x + 1), então apenas o
 * resultado é exibido e a variável $x continua guardando o valor original 10.
 */

$x = 10;

echo "Resultado = " . ($x + 1) . PHP_EOL;
echo "Valor original de x = " . $x . PHP_EOL;
