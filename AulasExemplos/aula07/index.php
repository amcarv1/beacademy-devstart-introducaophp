<?php

$url = $_SERVER['REQUEST_URI'];

if ($url === "/")
{
    echo "<h1>Página Inicial</h1>";
}   
elseif ($url === "/login")
{
    echo "<h1>Página de Login</h1>";
}   elseif ($url === "/cadastro")
{
    echo "<h1>Página de Cadastro</h1>";
}   else
{
    echo "<h1>Página Não Encontrada</h1>";
}