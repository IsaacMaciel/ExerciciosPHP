<?php
namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario {

    public function calculaBonificacao(): float {
        return $this->pegaSalario() * 2;
    }
}