<?php

/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Alunos:      26008802-2 -  João Marchezan
             26011979-2 -  Rafael.K
             26009345-2 -  vithor do carmo
             26008950-2 -  Vinicius de Medeiros
             26013906-2 -  lucas Gabriel
             26010098-2 -  Rafael José Dos Santos
Descritivo: Lê dois números inteiros, calcula a soma e exibe o resultado.
******************************************************************************/

$numero1 = (int) readline("Digite o primeiro número inteiro: ");
$numero2 = (int) readline("Digite o segundo número inteiro: ");

$soma = $numero1 + $numero2;

echo "Soma: " . $soma;

?>