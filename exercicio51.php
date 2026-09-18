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
Exercício: Calcula a média simples das duas maiores notas.
******************************************************************************/

$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");

if ($nota1 <= $nota2 && $nota1 <= $nota3) {
    $media = ($nota2 + $nota3) / 2;
} elseif ($nota2 <= $nota1 && $nota2 <= $nota3) {
    $media = ($nota1 + $nota3) / 2;
} else {
    $media = ($nota1 + $nota2) / 2;
}

echo "Média das duas maiores notas = " . $media;

?>