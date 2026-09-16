<?php

/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Alunos:      26008802-2 -  João Marchezan
             26011979-2 -  Rafael.K
             26009345-2 -  vithor do carmo
             26008950-2 -  Vinicius de Medeiros
             26013906-2 -  lucas Gabriel
             26010098-2 -  Rafael José Dos Santos
Descritivo: Lê um número inteiro entre 1 e 12 e exibe o nome do mês
correspondente por extenso.
******************************************************************************/

$mes = (int) readline("Digite um número entre 1 e 12: ");

switch ($mes) {
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    case 3:
        echo "Março";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Maio";
        break;
    case 6:
        echo "Junho";
        break;
    case 7:
        echo "Julho";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Setembro";
        break;
    case 10:
        echo "Outubro";
        break;
    case 11:
        echo "Novembro";
        break;
    case 12:
        echo "Dezembro";
        break;
    default:
        echo "Número inválido. Digite um valor entre 1 e 12.";
}

?>