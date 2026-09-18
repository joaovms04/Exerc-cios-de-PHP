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
Descritivo: Ler o tipo de um veículo ('A' a 'E') e a distância em Km a percorrer e,
com base na tabela de consumo (A=13.5, B=12.0, C=10.5, D=9.0, E=7.5 Km/l),
calcular e exibir o total de litros de combustível estimados.
*******************************************************************************/

/*
 * Explicação: o switch define o consumo em Km/l correspondente ao tipo informado e
 * a quantidade de litros é obtida dividindo a distância por esse consumo.
 */

echo "Tipo do veículo (A, B, C, D ou E): ";
$tipo = strtoupper(trim(fgets(STDIN)));

echo "Distância a percorrer (Km): ";
$distancia = (float) trim(fgets(STDIN));

switch ($tipo) {
    case "A":
        $consumo = 13.5;
        break;
    case "B":
        $consumo = 12.0;
        break;
    case "C":
        $consumo = 10.5;
        break;
    case "D":
        $consumo = 9.0;
        break;
    case "E":
        $consumo = 7.5;
        break;
    default:
        $consumo = 0;
}

if ($consumo == 0) {
    echo "ERRO: tipo de veículo inválido. Utilize A, B, C, D ou E." . PHP_EOL;
} elseif ($distancia <= 0) {
    echo "ERRO: a distância deve ser maior que zero." . PHP_EOL;
} else {
    $litros = $distancia / $consumo;

    echo PHP_EOL . "Tipo do veículo......: " . $tipo . PHP_EOL;
    echo "Consumo médio........: " . number_format($consumo, 1, ',', '.') . " Km/l" . PHP_EOL;
    echo "Distância............: " . number_format($distancia, 2, ',', '.') . " Km" . PHP_EOL;
    echo "Combustível estimado.: " . number_format($litros, 2, ',', '.') . " litros" . PHP_EOL;
}
