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

$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");

if ($num1 > $num2) {
    echo "O maior número é: " . $num1;
} elseif ($num2 > $num1) {
    echo "O maior número é: " . $num2;
} else {
    echo "Os dois números são iguais.";
}
// Este código executa o seguinte comand: Causo um número seja maior, o sistema diz que ele é o maior, agora, se ambos forem iguais, ele dirá que são iguais

?>
