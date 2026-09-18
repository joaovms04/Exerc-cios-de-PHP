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
Exercício: Lê dois números reais e exibe o maior deles.
******************************************************************************/

$numero1 = (float) readline("Digite o primeiro número: ");
$numero2 = (float) readline("Digite o segundo número: ");

if ($numero1 > $numero2) {
    echo "Maior número = " . $numero1;
} else {
    echo "Maior número = " . $numero2;
}

?>