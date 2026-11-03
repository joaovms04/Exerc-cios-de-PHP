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
Descritivo: Mostrar Dados: Foi criada uma função que recebe três informações: nome, idade e cidade, e exibe os dados de forma organizada.

Explicação: Nesse exercício, o procedimento recebe três informações diferentes e depois exibe todas elas.
<?php
function mostrarDados($nome, $idade, $cidade) {
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Cidade: " . $cidade;
}

mostrarDados("Vithor", 18, "Curitiba");
?>
