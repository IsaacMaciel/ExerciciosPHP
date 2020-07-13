<?php
namespace Alura\Banco\Modelo;

class Pessoa {
    protected $nome;
    protected $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function pegaNome():string {
        return $this->nome;
    }

    public function pegaCpf(): string {
        return $this->cpf->pegaNumero();
    }

    protected function validaNome($nome): void {
        if (strlen($nome) < 5) {
            echo "O nome informado foi $nome" . PHP_EOL;
            echo "Favor, informar um nome com mais de 5 caracteres";
            exit();
        }
        $this->nome = $nome;
    }
}