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
