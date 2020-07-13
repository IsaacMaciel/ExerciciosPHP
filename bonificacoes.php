<?php
require_once 'src\autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\EditordeVideo;
use Alura\Banco\Modelo\Service\ControladoraDeBonificacoes;

$gerente = new Gerente('Gerente da Silva',new CPF('255-695-322-15'),4000);
$diretor = new Diretor('Diretor da Silva',new CPF('111-999-555-12'),7000);
$desenvolvedor = new Desenvolvedor('Oi',new CPF('111-111-111-11'),1500);
$editorDeVideo = new EditordeVideo('Jose Santos',new CPF('15151-1515-1515'),3000);

$totalBeneficio = new ControladoraDeBonificacoes();

$totalBeneficio->adicionaBonificacao($gerente);
$totalBeneficio->adicionaBonificacao($diretor);
$totalBeneficio->adicionaBonificacao($desenvolvedor);
$totalBeneficio->adicionaBonificacao($editorDeVideo);

echo "Bonificações" .PHP_EOL;
echo "Desenvolvedor: R$ " . $desenvolvedor->calculaBonificacao() . PHP_EOL;
echo "Gerente: R$ " . $gerente->calculaBonificacao() . PHP_EOL;
echo "Diretor: R$ " . $diretor->calculaBonificacao() . PHP_EOL;
echo "Editor de Video: R$ " . $editorDeVideo->calculaBonificacao() . PHP_EOL;
echo "" .PHP_EOL;
echo "Total de bonificações: R$ " . $totalBeneficio->pegaTotalDeBonificacoes();
