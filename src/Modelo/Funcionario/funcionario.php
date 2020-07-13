<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Property;

abstract class Funcionario extends Pessoa {
     use Property;
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {      
        $this->salario = $salario;
        parent::__construct($nome,$cpf);        
    }

    public function setaNome($nome): void {
        $this->validaNome($nome);
    }

    public function recebeAumento(float $valorAumento): void {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento; 
    }

    public function pegaSalario(): float {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;

    _
}