<?php

class Funcionario extends Pessoa {
    private $cargo;

    public function __construct(string $nome, string $cargo, CPF $cpf)
    {      
        $this->cargo = $cargo;
        parent::__construct($nome,$cpf);        
    }

    public function peganCargo():string {
        return $this->cargo;
    }

    public function setCargo($cargo):void {
        $this->cargo = $cargo;
    }
}