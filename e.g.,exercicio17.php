<?php

$dividendo = (int) readline("Digite o dividendo: ");
$divisor = (int) readline("Digite o divisor: ");

$quociente = intdiv($dividendo, $divisor);
$resto = $dividendo % $divisor;

echo "Dividendo: " . $dividendo . "\n";
echo "Divisor: " . $divisor . "\n";
echo "Quociente: " . $quociente . "\n";
echo "Resto: " . $resto;
// De forma resumida, este código seleciona dois números para um ser o resultado e o outro o divisor, o divisor faz a multiplicação com o quociente, enquanto o resto é aquilo que soma para fechar o valor final no dividendo.
?>