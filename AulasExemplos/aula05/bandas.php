<?php

    $bandas = [
        'iron maiden',
        'guns and roses',
        'slipknot'
    ];

    $bandas[100] = "nivarna";
    $bandas[9] = "exaltasamba";

    
    echo '<ul>';

    /*
    for ($n = 0; $n <= count($bandas); $n++) 
    {
        echo "<li>" . $bandas[$n] . "</li>";
    }

    echo '</ul>';
    */

    echo '<ul>';

    foreach ($bandas as $nomeBanda) 
    {
        echo "<li>{$nomeBanda}</li>";
    }

    echo '</ul>';