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
Descritivo: Lê um número real e exibe a terça parte desse número.
******************************************************************************/

$numero = (float) readline("Digite um número real: ");

$tercaParte = $numero / 3;

echo "Terça parte = " . $tercaParte;

?>