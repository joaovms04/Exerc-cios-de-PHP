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
             26010098-2 -  Rafael José Falta o dele
             26008802-2 -  João Victor Marchezan
             26013906-2 -  Lucas de Oliveira
Data: 18 de Setembro de 2026
Descritivo: Calcula a idade do nadador e mostra sua categoria.
*******************************************************************************/

$anoNascimento = 2010;
$anoAtual = 2026;

$idade = $anoAtual - $anoNascimento;

if ($idade <= 4) {
    $categoria = "Não aceito";
} elseif ($idade <= 7) {
    $categoria = "Infantil A";
} elseif ($idade <= 10) {
    $categoria = "Infantil B";
} elseif ($idade <= 13) {
    $categoria = "Juvenil A";
} elseif ($idade <= 17) {
    $categoria = "Juvenil B";
} else {
    $categoria = "Sênior";
}

echo "Idade: " . $idade . " anos<br>";
echo "Categoria: " . $categoria;

?>
