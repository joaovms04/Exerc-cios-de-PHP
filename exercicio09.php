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
Descritivo: Ler um nome, um endereço e um telefone via teclado e imprimi-los na tela
organizados em linhas separadas.
*******************************************************************************/

/*
 * Explicação: os três dados são lidos pela CLI com fgets(STDIN) e guardados em
 * variáveis; depois cada um é exibido em uma linha própria usando PHP_EOL.
 */

echo "Digite o nome: ";
$nome = trim(fgets(STDIN));

echo "Digite o endereço: ";
$endereco = trim(fgets(STDIN));

echo "Digite o telefone: ";
$telefone = trim(fgets(STDIN));

echo PHP_EOL . "----- DADOS CADASTRAIS -----" . PHP_EOL;
echo "Nome.....: " . $nome . PHP_EOL;
echo "Endereço.: " . $endereco . PHP_EOL;
echo "Telefone.: " . $telefone . PHP_EOL;
