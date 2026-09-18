<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
    26008802-2 - João Marchezan
    26011979-2 - Rafael.K
    26009345-2 - vithor do carmo
    26008950-2 - Vinicius de Medeiros
    26013906-2 - lucas Gabriel
    26010098-2 - Rafael José Dos Santos
Data: 17 de Setembro de 2026
Descritivo: Ler uma data no formato ddmmaa (ex: 250826) e exibir a mesma data
reorganizada no formato mmddaa.
*******************************************************************************/

/*
 * Explicação: a data é lida como string e a função substr() recorta os pares de
 * dígitos (dia, mês e ano), que são reimpressos na ordem mês + dia + ano.
 */

echo "Digite a data no formato ddmmaa (ex: 250826): ";
$data = trim(fgets(STDIN));

if (strlen($data) != 6 || !ctype_digit($data)) {
    echo "ERRO: a data deve conter exatamente 6 dígitos." . PHP_EOL;
} else {
    $dia = substr($data, 0, 2);
    $mes = substr($data, 2, 2);
    $ano = substr($data, 4, 2);

    echo "Data informada (ddmmaa): " . $data . PHP_EOL;
    echo "Data convertida (mmddaa): " . $mes . $dia . $ano . PHP_EOL;
}
