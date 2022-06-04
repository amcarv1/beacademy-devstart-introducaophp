<?php

    $a1 = [
        'nome' => 'chiquim',
        'email' => 'chiquim@email.com',
        'telefone' => '9999999',
        'notas' => [
            9,
            10,
            7,
            6
        ]
    ];

    $a2 = [
        'nome' => 'maria',
        'email' => 'maria@email.com',
        'telefone' => '8888888',
        'notas' => [
            4,
            10,
            2,
            10
        ]
    ];

    $alunos = [
        $a1,
        $a2,
    ];

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
<table class="table table-hover table-stripped mt-5">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($alunos as $cadaAluno)
            {
                echo "<tr>";
                    echo "<td>" . $cadaAluno['nome'] . "</td>";
                    echo "<td>" . $cadaAluno['email'] . "</td>";
                    echo "<td>" . $cadaAluno['telefone'] . "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
</div>
