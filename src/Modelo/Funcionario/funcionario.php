<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

  class Funcionario extends Pessoa {
    private $cargo;

    public function __construct(string $nome, string $cargo, CPF $cpf, float $salario)
    {      
        $this->cargo = $cargo;
        $this->salario = $salario;
        parent::__construct($nome,$cpf);        
    }

    public function peganCargo(): string {
        return $this->cargo;
    }

    public function setCargo($cargo): void {
        $this->cargo = $cargo;
    }

    public function alteraNome($nome): void {
        $this->validaNome($nome);
    }

    public function pegaSalario(): float {
        return $this->salario;
    }

    public function calculaBonificacao(): float {
        return 0.1;
    }
}