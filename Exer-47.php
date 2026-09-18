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
Descritivo: Compara dois nomes e mostra os nomes em ordem alfabética.
*******************************************************************************/

$nome1 = "Ana";
$nome2 = "Carlos";

if ($nome1 < $nome2) {
    echo "Ordem alfabética:<br>";
    echo $nome1 . "<br>";
    echo $nome2;
} else {
    echo "Ordem alfabética:<br>";
    echo $nome2 . "<br>";
    echo $nome1;
}

?>