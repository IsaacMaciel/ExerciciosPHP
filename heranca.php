<?php

require_once 'src\autoload.php';

use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\CPF;


$umFuncionario = new Funcionario('Isaac Araujo','Assistende de TI',new CPF('188-658-585-12'));

var_dump($umFuncionario);

