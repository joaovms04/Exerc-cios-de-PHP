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
Descritivo:Calcular Média do Aluno: Foi criada uma função que recebe duas notas, calcula a média e verifica se o aluno foi aprovado ou reprovado.

Explicação: Aqui eu recebo duas notas, faço o cálculo da média e uso uma condição para verificar se o aluno foi aprovado ou reprovado.
<?php
function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;

    echo "Média: " . $media . "<br>";

    if ($media >= 7) {
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }
}

calcularMediaAluno(8, 6);
?>
