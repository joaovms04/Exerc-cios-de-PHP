<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes: 
 RA - Nome completo 1
 RA - Nome completo 2
 RA - Nome completo 3
 RA - Nome completo 4
 RA - Nome completo 5
Data: 18 de Setembro de 2026
Descritivo: Exercício 05 - Ler o nome do usuário via teclado e exibir a mensagem
            de boas-vindas 'Olá [nome digitado]!'
*******************************************************************************/

// Solicita e lê o nome do usuário via CLI (teclado)
echo "Digite seu nome: ";
$nome = trim(fgets(STDIN));

// Exibe a mensagem de boas-vindas formatada com o nome lido
echo "Olá $nome!" . PHP_EOL;
