<?php

$idade = 29;
$nome = 'Marcos';
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade >= 18 && $nome == 'Marcos') {
    echo "Olá $nome. Você tem $idade anos e seu nome está na lista. Pode entrar." . PHP_EOL;
} else if ($idade >= 18 && $nome != 'Marcos') {
    echo "Olá $nome. Você tem $idade anos. Você poderia entrar, mas seu nome não está na lista, por isso não pode entrar." . PHP_EOL;
} else if ($idade < 18) {
    echo "Você só tem $idade anos. Você não pode entrar." . PHP_EOL;
    echo PHP_EOL . "Adeus!" . PHP_EOL . "É uma pena que você não pode entrar.";
}