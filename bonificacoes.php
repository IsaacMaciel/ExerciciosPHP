<?php
require_once 'src\autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\ControladoraDeBonificacoes;


$funcionario = new Funcionario('Isaac Araujo','Auxiliar',new CPF('108-934-084-25'),1000);
$gerente = new Gerente('Gerente da Silva','Ger Operações',new CPF('255-695-322-15'),4000);
$diretor = new Diretor('Diretor da Silva','Dir de Operações',new CPF('111-999-555-12'),7000);

$totalBeneficio = new ControladoraDeBonificacoes($funcionario);
$totalBeneficio = new ControladoraDeBonificacoes($gerente);
$totalBeneficio = new ControladoraDeBonificacoes($diretor);

echo $totalBeneficio->pegaTotalDeBonificacoes();