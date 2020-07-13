<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Property;

class Titular extends Pessoa implements Autenticavel
{
    use Property;
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->endereco = $endereco;
        parent::__construct($nome, $cpf);
    }

    public function pegaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha = 'abcd';
    }

}
