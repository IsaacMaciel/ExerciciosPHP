<?php

class Titular extends Pessoa {
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->endereco = $endereco;
        parent::__construct($nome,$cpf)
    }
    
    public function recuperaEndereco(): Endereco {
        return $this->endereco;
    }


}