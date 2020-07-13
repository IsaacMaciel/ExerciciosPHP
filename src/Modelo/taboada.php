<?php
namespace Alura\Banco\Modelo;

for ($y = 0; $y <= 9; $y++) {
    $numero = $y + 1;

    echo "Exibindo a tabuada do número: $numero" . PHP_EOL;

    for ($i = 1; $i <= 10; $i++) {
        $result = $numero * $i;
        echo "$numero X $i == $result" . PHP_EOL;
    }
}
