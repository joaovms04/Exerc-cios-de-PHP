<?php

$x = (float) readline("Digite um número real: ");

if ($x > 0) {
    echo "Inverso: " . (1 / $x);
} else {
    echo "Valor absoluto: " . ($x * -1);
}
// Aqui o código apresentado faz exatamente oque é peço no enunciado, ele vai ler um número real, causo seja positivo, ele mostra o inverso, caso contrario, o valor absoluto.
?>