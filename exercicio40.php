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
Descritivo: Dados do Carro: Foi criada uma função que recebe um array associativo contendo marca, modelo e ano de um carro e exibe essas informações.

Explicação: Nesse caso, usei um array associativo para guardar informações de um carro, como marca, modelo e ano, usando nomes para identificar cada informação.
<?php
function mostrarCarro($carro) {
    echo "Marca: " . $carro["marca"] . "<br>";
    echo "Modelo: " . $carro["modelo"] . "<br>";
    echo "Ano: " . $carro["ano"];
}

$carro = [
    "marca" => "Volkswagen",
    "modelo" => "Gol",
    "ano" => 2015
];

mostrarCarro($carro);
?>
