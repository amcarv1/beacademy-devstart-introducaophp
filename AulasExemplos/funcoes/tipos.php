<?php

declare(strict_types=1);

function welcome(string $nome): string
{
    echo "Bem-vindo {$nome}";
}

function soma(float $n1, float $n2): float
{
    return $n1 + $n2;
}

echo soma("joão", "joaozinho");
echo soma(10.2, 19.2);

echo welcome("Pedro");