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
Descritivo: Imprimir Array: Foi criada uma função que recebe um array e utiliza 
o foreach para percorrer e imprimir todos os seus elementos.

Explicação: Aqui eu usei o foreach para passar por cada item do array e mostrar todos eles na tela.
<?php
function imprimirArray($array) {
    foreach ($array as $valor) {
        echo $valor . "<br>";
    }
}

$numeros = [10, 20, 30, 40, 50];

imprimirArray($numeros);
?>
