<?php

$idade = 28;
$nome = 'Juanito';

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade >= 18 and $nome == 'Marcos') {
    echo "Olá $nome. Você tem $idade anos e seu nome está na lista. Pode entrar." . PHP_EOL;
} else if ($idade >= 18 and $nome != 'Marcos') {
    echo "Olá $nome. Você tem $idade anos. Você poderia entrar, mas seu nome não está na lista, por isso não pode entrar." . PHP_EOL;
} else if ($idade < 18) {
    echo "Você só tem $idade anos. Você não pode entrar." . PHP_EOL;
}
