<?php

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca,Titular};
use Alura\Banco\Modelo\{CPF,Endereco};


require_once 'src\autoload.php';

$cpf = new CPF('108-934-084-25');
$endereco = new Endereco('Recife','Bv','Rua lalala','333');

$titular = new Titular($cpf,'Isaac Araujo',$endereco);

$conta = new ContaCorrente($titular);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();