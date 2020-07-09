<?php

class Conta
{
    private $titular;
    private $saldo;
    static $numeroContas;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroContas++;
    }


    public function sacar($valorSaque): void
    {
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar($valorDeposito): void
    {
        if ($valorDeposito < 0) {
            echo "O valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorDeposito;
    }

    public function transferir(float $valor, Conta $contaDestino): void
    {

        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valor);
        $contaDestino->depositar($valor);
        $contaDestino->contaTransferencia = $this->nomeTitular;
    }

    public function recuperaNomeTitular(): string 
    {
        return $this->titular->pegaNome();
    }

    public function recuperaCpfTitular(): string 
    {
        return $this->titular->pegaCpf();
    }

    public function recuperarSaldo(): float {
        return $this->saldo;
    }

    public static function pegarNumeroContas(): int {
        return self::$numeroContas;
    }

}