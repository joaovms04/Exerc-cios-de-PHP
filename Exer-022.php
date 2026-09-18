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
             26010098-2 -  Rafael José
             26008802-2 -  João Victor Marchezan
             26013906-2 -  Lucas de Oliveira
Data: 18 de Setembro de 2026
Descritivo: Calcula um aumento de 2% no saldo e mostra o novo valor.
*******************************************************************************/

$saldo = 1000;

$reajuste = $saldo * 0.02;
$novoSaldo = $saldo + $reajuste;

echo "Novo saldo = R$ " . $novoSaldo;

?>
