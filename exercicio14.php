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
Descritivo: Ler o nome de um aluno e suas duas notas (AVs), calcular a média
aritmética simples e exibir o nome do aluno seguido de sua média final.
*******************************************************************************/

/*
 * Explicação: as duas notas são somadas e divididas por 2 para obter a média
 * aritmética simples, exibida com duas casas decimais por number_format().
 */

echo "Nome do aluno: ";
$nome = trim(fgets(STDIN));

echo "Nota da AV1: ";
$av1 = (float) trim(fgets(STDIN));

echo "Nota da AV2: ";
$av2 = (float) trim(fgets(STDIN));

$media = ($av1 + $av2) / 2;

echo PHP_EOL . "Aluno......: " . $nome . PHP_EOL;
echo "Média final: " . number_format($media, 2, ',', '.') . PHP_EOL;
