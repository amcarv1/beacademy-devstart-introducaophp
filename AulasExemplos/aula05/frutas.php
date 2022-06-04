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

<ul>
    <li><?php echo $frutas[0] ?></li>
    <li><?php echo $frutas[1] ?></li>
    <li><?php echo $frutas[2] ?></li>
    <li><?php echo $frutas[3] ?></li>
    <li><?php echo $frutas[10] ?></li>
    <li><?php echo $frutas[7] ?></li>
    <li><?php echo $frutas[11] ?></li>
</ul>