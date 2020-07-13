<?php

use Alura\Banco\Modelo\Endereco;

require_once 'src\autoload.php';

$endereco = new Endereco(
    'Recife',
    'Boa Viagem',
    'Rua presidente',
    '111'
);

echo $endereco;
