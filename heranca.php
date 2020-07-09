<?php

require_once 'src/pessoa.php';
require_once 'src/funcionario.php';
require_once 'src/cpf.php';

$umFuncionario = new Funcionario('Isaac Araujo','Assistende de TI',new CPF('188-658-585-12'));
var_dump($umFuncionario);
