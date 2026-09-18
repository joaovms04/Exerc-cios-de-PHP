<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes: 
 RA - Nome completo 1
 RA - Nome completo 2
 RA - Nome completo 3
 RA - Nome completo 4
 RA - Nome completo 5
Data: 18 de Setembro de 2026
Descritivo: Exercício 37 - Ler três notas de um aluno, calcular a média
            aritmética simples e exibir a média e o conceito correspondente
            (A: média >= 8.0 | B: média >= 5.0 e < 8.0 | C: média < 5.0)
*******************************************************************************/

echo "Digite a primeira nota: ";
$n1 = (float) trim(fgets(STDIN));

echo "Digite a segunda nota: ";
$n2 = (float) trim(fgets(STDIN));

echo "Digite a terceira nota: ";
$n3 = (float) trim(fgets(STDIN));

// Calcula a média aritmética simples das três notas
$media = ($n1 + $n2 + $n3) / 3;

// Determina o conceito de acordo com a faixa em que a média se encaixa
if ($media >= 8.0) {
    $conceito = "A";
} elseif ($media >= 5.0) {
    $conceito = "B";
} else {
    $conceito = "C";
}

echo "Média = $media" . PHP_EOL;
echo "Conceito = $conceito" . PHP_EOL;
