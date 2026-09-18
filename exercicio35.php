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
Descritivo: Compara dois números e mostra eles em ordem crescente e decrescente.
*******************************************************************************/

$numero1 = 10;
$numero2 = 20;

if ($numero1 < $numero2) {
    echo "Ordem crescente: " . $numero1 . ", " . $numero2 . "<br>";
    echo "Ordem decrescente: " . $numero2 . ", " . $numero1;
} else {
    echo "Ordem crescente: " . $numero2 . ", " . $numero1 . "<br>";
    echo "Ordem decrescente: " . $numero1 . ", " . $numero2;
}

?>
