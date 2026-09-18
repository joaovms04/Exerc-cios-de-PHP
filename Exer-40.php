<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes: 
             26008950-2 -  Vinicius de Medeiros
             26009345-2 -  Vithor do Carmo Ariza
             26011979-2 -  Rafael Luis do P.B Kluck
             26010098-2 -  Rafael José
             26008802-2 -  João Victor Marchezan
             26013906-2 -  Lucas de Oliveira
Data: 18 de Setembro de 2026
Descritivo: Calcula o valor total da hospedagem de um hotel, incluindo as diárias, o consumo e a taxa.
*******************************************************************************/

$nome = "Rafael";
$tipo = "A";
$diarias = 3;
$consumo = 100;

if ($tipo == "A") {
    $valorDiaria = 150;
} elseif ($tipo == "B") {
    $valorDiaria = 100;
} elseif ($tipo == "C") {
    $valorDiaria = 75;
} else {
    $valorDiaria = 50;
}

$totalDiarias = $diarias * $valorDiaria;
$subtotal = $totalDiarias + $consumo;
$taxa = $subtotal * 0.10;
$total = $subtotal + $taxa;

echo "Hóspede: " . $nome . "<br>";
echo "Total das diárias: R$ " . $totalDiarias . "<br>";
echo "Consumo: R$ " . $consumo . "<br>";
echo "Taxa: R$ " . $taxa . "<br>";
echo "Total: R$ " . $total;

?>