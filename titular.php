<?php

class Titular {
    private $cpf;
    private $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
    }

    public function pegaCpf(): string
    {
        return $this->cpf;
    }

    public function pegaNome(): string
    {
        return $this->nome;
    }

    public function setarCpf($cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setarNome($nome): void
    {
        $this->nome = $nome;
    }

    private function validaNome($nome): void {
        if (strlen($nome) < 5) {
            echo "O nome informado foi $nome" . PHP_EOL;
            echo "Favor, informar um nome com mais de 5 caracteres";
            exit();
        }
        $this->nomeTitular = $nome;
    }


}