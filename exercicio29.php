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

$x = (float) readline("Digite um número real: ");

if ($x > 0) {
    echo "Inverso: " . (1 / $x);
} else {
    echo "Valor absoluto: " . ($x * -1);
}
// Aqui o código apresentado faz exatamente oque é peço no enunciado, ele vai ler um número real, causo seja positivo, ele mostra o inverso, caso contrario, o valor absoluto.
?>
