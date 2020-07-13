<?php
namespace Alura\Banco\Modelo;

trait Property {

      public function __get(string $nomeAtributo)
    {
        $metodo = 'pega' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set($name, $value): void
    {
        $metodo = 'seta' . ucfirst($name);
        $this->$metodo($value);
    }
}
