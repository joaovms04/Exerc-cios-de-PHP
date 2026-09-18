<?php

$cpf = readline("Digite o CPF: ");
$nome = readline("Digite o nome: ");
$rendimento = (float) readline("Digite o rendimento anual: ");
$impostoRetido = (float) readline("Digite o imposto retido na fonte: ");
$previdencia = (float) readline("Digite a contribuição previdenciária: ");
$despesasMedicas = (float) readline("Digite as despesas médicas: ");
$dependentes = (int) readline("Digite o número de dependentes: ");

$deducaoDependentes = $dependentes * 1080;

$totalDeducoes = $previdencia + $despesasMedicas + $deducaoDependentes;

$baseCalculo = $rendimento - $totalDeducoes;

if ($baseCalculo <= 10800) {
    $aliquota = 0;
    $parcelaDeduzir = 0;
} elseif ($baseCalculo <= 21600) {
    $aliquota = 0.15;
    $parcelaDeduzir = 1620;
} else {
    $aliquota = 0.25;
    $parcelaDeduzir = 3780;
}

$impostoDevido = ($baseCalculo * $aliquota) - $parcelaDeduzir;

$diferenca = $impostoDevido - $impostoRetido;

echo "\n--- RESULTADO ---\n";
echo "CPF: " . $cpf . "\n";
echo "Nome: " . $nome . "\n";
echo "Base de Cálculo: R$ " . $baseCalculo . "\n";
echo "Imposto Devido: R$ " . $impostoDevido . "\n";

if ($diferenca > 0) {
    echo "Imposto a PAGAR: R$ " . $diferenca . "\n";
} elseif ($diferenca < 0) {
    echo "Imposto a RESTITUIR: R$ " . abs($diferenca) . "\n";
} else {
    echo "Não há imposto a pagar nem a restituir.\n";
}
// Aqui um código que pede informações de um sujeito para que possa calcular seu imposto de renda anual. Causo a diferença seja positiva for positiva, há imposto a ser pago, senão negativa, há imposto a restituir.
?>