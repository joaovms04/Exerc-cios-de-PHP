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
Data: 02 de novembro de 2026
Descritivo: Contagem Regressiva: Foi criada uma função que recebe um número e utiliza o for para realizar uma contagem regressiva até chegar ao zero.

Explicação: Usei o for para fazer uma contagem de 10 até 0, diminuindo um número a cada repetição.
<?php
function contagemRegressiva($numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "<br>";
    }
}

contagemRegressiva(10);
?>
