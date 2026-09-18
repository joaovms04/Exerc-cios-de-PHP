<?php
//******************************************************************************
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

$estado = readline("Digite a sigla do estado: ");

if ($estado == "RJ") {
    echo "Carioca";
} elseif ($estado == "SP") {
    echo "Paulista";
} elseif ($estado == "MG") {
    echo "Mineira";
} else {
    echo "Outro estado";
}
// Este código realiza uma função de dizer sua nacionalidade baseada nesses 3 estados de cima, causo vc seja de outro que não está incluso na tabela, ele dira que você é de outro estado.
?>
