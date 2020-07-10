<?php
namespace Alura\Banco\Modelo\Conta;

abstract class Conta
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
    public function sacar(float $saque): void
    {   
        $tarifa = $saque * $this->percentualTarifa();
        $valorASacar = $saque + $tarifa;
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }
    public function depositar( float $valorDeposito): void
    {
        if ($valorDeposito < 0) {
            echo "O valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorDeposito;
    }
    public function recuperarSaldo(): float {
        return $this->saldo;
    }

    public static function pegarNumeroContas(): int {
        return self::$numeroContas;
    }
    abstract  protected function percentualTarifa(): float;

}