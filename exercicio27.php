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
Exercício: Verifica se um número inteiro é estritamente maior que zero.
******************************************************************************/

$numero = (int) readline("Digite um número inteiro: ");

if ($numero > 0) {
    echo "O número é maior que zero.";
} else {
    echo "O número não é maior que zero.";
}

?>