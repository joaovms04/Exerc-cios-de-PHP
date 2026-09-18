<?php

$estado = readline("Digite a sigla do estado: ");

if ($estado == "RJ") {
    echo "Carioca";
} elseif ($estado == "SP") {
    echo "Paulista";
} elseif ($estado == "MG") {
    echo "Mineira";
} else {
    echo "Outro estado";
}
// Este código realiza uma função de dizer sua nacionalidade baseada nesses 3 estados de cima, causo vc seja de outro que não está incluso na tabela, ele dira que você é de outro estado.
?>