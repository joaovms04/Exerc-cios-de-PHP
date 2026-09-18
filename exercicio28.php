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
Descritivo: Verifica se o número é maior que 20 e, se for, mostra sua metade.
*******************************************************************************/

$numero = 30;

if ($numero > 20) {
    $metade = $numero / 2;
    echo "Metade = " . $metade;
} else {
    echo "O número não é maior que 20.";
}

?>
