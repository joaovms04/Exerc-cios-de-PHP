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
Descritivo: Maior Número: Foi criada uma função que recebe dois números, compara seus valores e retorna aquele que for maior.

Explicação: Aqui a função recebe dois números, compara os dois e retorna aquele que for maior.
<?php
function maiorNumero($numero1, $numero2) {
    if ($numero1 > $numero2) {
        return $numero1;
    } else {
        return $numero2;
    }
}

$resultado = maiorNumero(15, 25);

echo "O maior número é: " . $resultado;
?>
