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
Descritivo: Calcula o peso ideal de uma pessoa usando sua altura e sexo.
*******************************************************************************/

$altura = 1.80;
$sexo = "M";

if ($sexo == "M") {
    $pesoIdeal = (72.7 * $altura) - 58;
    echo "Peso ideal = " . $pesoIdeal . " kg";
} else {
    $pesoIdeal = (62.1 * $altura) - 44.7;
    echo "Peso ideal = " . $pesoIdeal . " kg";
}

?>
