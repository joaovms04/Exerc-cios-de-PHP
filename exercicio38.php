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
Exercício: Calcula o IMC e classifica o grau de obesidade.
******************************************************************************/

$peso = (float) readline("Digite o peso em kg: ");
$altura = (float) readline("Digite a altura em metros: ");

$imc = $peso / ($altura * $altura);

echo "IMC = " . $imc . "\n";

if ($imc < 26) {
    echo "Classificação: Normal";
} elseif ($imc < 30) {
    echo "Classificação: Obeso";
} else {
    echo "Classificação: Obeso Mórbido";
}

?>