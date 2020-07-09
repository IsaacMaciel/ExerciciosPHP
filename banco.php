<?php

require_once 'conta.php';
require_once 'titular.php';

$isaac = new Titular('108-934-084-25','Isaac');

$contaIsaac = new Conta($isaac);
$contaIsaac->depositar(500);
$contaIsaac->sacar(400);

$joao = new Titular('969-944-544-45','Joao Gabriel');

$contaJoao = new Conta($joao);
$contaJoao->depositar(500);
$contaJoao->sacar(400);

$josenildo = new Titular('365-558-963-13','Josenildo Fontes');

$contaJosenildo = new Conta($josenildo);
$contaJosenildo->depositar(500);
$contaJosenildo->sacar(400);

// $saldo = $primeiraConta->recuperarSaldo();
// $cpf = $primeiraConta->recuperaCpfTitular();
// $nome = $primeiraConta->recuperaNomeTitular();

var_dump($primeiraConta);

// $numeroContasCriadas = $primeiraConta->pegarNumeroContas();

// echo "Número total de contas criadas: $numeroContasCriadas";
