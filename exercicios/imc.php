<?php

$peso = 91.7;
$altura = 1.80;

$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "Seu IMC é de $imc. Você está abaixo do peso." . PHP_EOL;
} else if ($imc >= 18.5 && $imc <= 24.9) {
    echo "Seu IMC é de $imc. Você está com o peso normal." . PHP_EOL;
} else if ($imc >= 25 && $imc <= 29.9) {
    echo "Seu IMC é de $imc. Você está com sobrepeso." . PHP_EOL;
} else if ($imc >= 30 && $imc <= 34.9) {
    echo "Seu IMC é de $imc. Você está com obesidade grau I." . PHP_EOL;
} else if ($imc >= 35 && $imc <= 39.9) {
    echo "Seu IMC é de $imc. Você está com obesidade grau II." . PHP_EOL;
} else if ($imc >= 40) {
    echo "Seu IMC é de $imc. Você está com obesidade grau III." . PHP_EOL;
}