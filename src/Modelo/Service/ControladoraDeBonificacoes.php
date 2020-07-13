<?php
namespace Alura\Banco\Modelo\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;



class ControladoraDeBonificacoes {
    private $totaldeBonificacoes = 0;


   public function adicionaBonificacao(Funcionario $funcionario) {
       $this->totaldeBonificacoes += $funcionario->calculaBonificacao();
   }

    public function pegaTotalDeBonificacoes() :float {
        return $this->totaldeBonificacoes;
    }
}