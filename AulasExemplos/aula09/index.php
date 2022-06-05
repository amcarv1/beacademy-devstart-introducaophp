<?php

$notasCursoA = [
    10,
    9,
    9.5,
    7,
];

$notasCursoB = [
    8,
    9.4,
    5,
    6,
];

function mediaNotas(array $notas): float
{
    return array_sum($notas) / count($notas);
}

echo mediaNotas($notasCursoA);