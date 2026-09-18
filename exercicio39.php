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
Descritivo: Ler o nome de um funcionário e seu salário atual e calcular o novo
salário conforme a faixa de reajuste: até R$ 1000,00 = 20%; de R$ 1000,01 a
R$ 5000,00 = 10%; acima de R$ 5000,00 = sem reajuste.
*******************************************************************************/

/*
 * Explicação: as faixas salariais são testadas em sequência com if/elseif/else
 * para definir o percentual, que em seguida é aplicado sobre o salário atual.
 */

echo "Nome do funcionário: ";
$nome = trim(fgets(STDIN));

echo "Salário atual (R$): ";
$salario = (float) trim(fgets(STDIN));

if ($salario < 0) {
    echo "ERRO: o salário não pode ser negativo." . PHP_EOL;
} else {
    if ($salario <= 1000.00) {
        $percentual = 20;
    } elseif ($salario <= 5000.00) {
        $percentual = 10;
    } else {
        $percentual = 0;
    }

    $reajuste = $salario * ($percentual / 100);
    $novoSalario = $salario + $reajuste;

    echo PHP_EOL . "----- FOLHA DE REAJUSTE -----" . PHP_EOL;
    echo "Funcionário....: " . $nome . PHP_EOL;
    echo 'Salário atual..: R$ ' . number_format($salario, 2, ',', '.') . PHP_EOL;
    echo "Reajuste.......: " . $percentual . "%" . PHP_EOL;
    echo 'Valor do aumento: R$ ' . number_format($reajuste, 2, ',', '.') . PHP_EOL;
    echo 'Novo salário...: R$ ' . number_format($novoSalario, 2, ',', '.') . PHP_EOL;
}
