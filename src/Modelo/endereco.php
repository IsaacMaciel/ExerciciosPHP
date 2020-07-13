<?php
namespace Alura\Banco\Modelo;

/**
 *@property-read string $cidade
 *@property-read string $bairro
 *@property-read string $rua
 *@property-read string $cidade
 */

class Endereco
{
    use Property;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function pegaCidade(): string
    {
        return $this->cidade;
    }
    public function pegaBairro(): string
    {
        return $this->bairro;
    }
    public function pegaRua(): string
    {
        return $this->rua;
    }
    public function pegaNumero(): string
    {
        return $this->numero;
    }
    public function setaCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }
    public function setaBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }
    public function setaRua(string $rua): void
    {
        $this->rua = $rua;
    }
    public function setaNumero(string $numero): void
    {
        $this->numero = $numero;
    }
    public function __toString(): string
    {

        return "Rua: {$this->rua}, Numero: {$this->numero}, Bairro: {$this->bairro}, Cidade: {$this->cidade}";
    }

}
