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

$letra = readline("Digite uma letra: ");

if ($letra == "A" || $letra == "E" || $letra == "I" || $letra == "O" || $letra == "U") {
    echo "É uma vogal maiúscula.";
} elseif ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
    echo "É uma vogal minúscula.";
} else {
    echo "É uma consoante.";
}
// Este programa lê as vogais e diz se são maiúsculas ou minúsculas, qualquer outra tecla é uma consoante.

?>
