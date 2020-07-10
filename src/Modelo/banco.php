<?php


require_once 'conta.php';
require_once 'titular.php';
require_once 'endereco.php';

use Modelo\Endereco;
use Titular;
use Modelo\Conta\Conta;

$endereco = new Endereco('Recife','BV/Boa Viagem','Rua qualquer','111');

$isaac = new Titular('108-934-084-25','Isaac',$endereco);

$contaIsaac = new Conta($isaac);
$contaIsaac->depositar(500);
$contaIsaac->sacar(400);

$joao = new Titular('969-944-544-45','Joao Gabriel',$endereco);

$contaJoao = new Conta($joao);
$contaJoao->depositar(500);
$contaJoao->sacar(400);

$endereco = new Endereco('????','?????','????','1258');


$josenildo = new Titular('365-558-963-13','Josenildo Fontes',$endereco);

$contaJosenildo = new Conta($josenildo);
$contaJosenildo->depositar(500);
$contaJosenildo->sacar(400);

// $saldo = $primeiraConta->recuperarSaldo();
// $cpf = $primeiraConta->recuperaCpfTitular();
// $nome = $primeiraConta->recuperaNomeTitular();

var_dump($contaIsaac);
var_dump($contaJoao);
var_dump($contaJosenildo);

// $numeroContasCriadas = $primeiraConta->pegarNumeroContas();

// echo "Número total de contas criadas: $numeroContasCriadas";
