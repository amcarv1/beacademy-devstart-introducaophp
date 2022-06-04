<?php

    $url = $_SERVER['REQUEST_URI'];    
    echo match ($url) {
        "/exercicio/ex01.php/" => "<h1>Página Inicial</h1>",
        "/exercicio/ex01.php/login" => "<h1>Página de Login</h1>",
        "/exercicio/ex01.php/cadastro" => "<h1>Página de Cadastro</h1>",
        default => "<h1>Página Não Encontrada</h1>"
    };