<?php

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