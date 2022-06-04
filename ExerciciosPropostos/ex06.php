<?php

    $frutas = [
        'laranja',
        'banana',
        'abacaxi',
    ];

    $frutas[] = 'maçã'; // adicionando maçã

    $frutas[10] = 'melancia'; 

    $frutas[7] = 'morango';

    $frutas[] = 'tangerina';

?>

<?php

    for ($i = 0; $i <= count($frutas); $i++)
    {
        echo "<ul>{$frutas[$i]}</ul>";
    }

?>