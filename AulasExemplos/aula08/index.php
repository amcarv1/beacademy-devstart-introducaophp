<?php

$url = $_SERVER['REQUEST_URI'];

include 'telas/menu.php';

if ($url === "/")
{
    include 'telas/home.php';
}   
elseif ($url === "/login")
{
    include 'telas/login.php';
}   elseif ($url === "/cadastro")
{
    include 'telas/cadastro.php';
}   else
{
    include 'telas/404.php';
}