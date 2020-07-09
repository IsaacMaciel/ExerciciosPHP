<?php

class CPF {
    private $cpf;

    public function __construct($cpf)
    {
        $this->cpf = $cpf;
    }

    public function recuperaNumero(): string {
        return $this->cpf;
    }

}