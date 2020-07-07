<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;
    public string $contaTransferencia;


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
}
