<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Service\Autenticador;

require_once 'src\autoload.php';


$autenticador = new Autenticador();
$diretor = new Diretor(
    'João da Silva',
    new CPF('11515-151-15-15'),
    10000
);

$autenticador->tentaLogin($diretor,1234);