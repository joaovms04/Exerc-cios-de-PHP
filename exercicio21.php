<?php

/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Alunos:      26008802-2 - João Marchezan
             26013906-2 - Lucas Gabriel
             26010098-2 - Rafael José Dos Santos
             26011979-2 - Rafael.K
             26008950-2 - Vinicius de Medeiros
             26009345-2 - vithor do carmo
Exercício: Calcula a média ponderada de quatro números usando pesos de 1 a 4.
******************************************************************************/

$numero1 = (int) readline("Digite o primeiro número: ");
$numero2 = (int) readline("Digite o segundo número: ");
$numero3 = (int) readline("Digite o terceiro número: ");
$numero4 = (int) readline("Digite o quarto número: ");

$media = ($numero1 * 1 + $numero2 * 2 + $numero3 * 3 + $numero4 * 4) / 10;

echo "Média ponderada = " . $media;

?>