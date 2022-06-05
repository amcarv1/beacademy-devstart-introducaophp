<?php

    $p1 = [
        'nome' => 'camiseta',
        'imagem' => '<p align=center><img src="img/camiseta.webp" width=20% /></p>',
        'preco' => 'R$ 27,90',
        'descricao' => 'uma bela camiseta confortável.',
    ];

    $p2 = [
        'nome' => 'bermuda',
        'imagem' => '<p align=center><img src="img/bermuda.webp" width=20% /></p>',
        'preco' => 'R$ 39,20',
        'descricao' => 'bermuda jeans para moda casual.',
    ];


    $p3 = [
        'nome' => 'chinelo',
        'imagem' => '<p align=center><img src="img/chinelo.webp" width=20% /></p>',
        'preco' => 'R$ 17,50',
        'descricao' => 'andar com conforto para o seu dia a dia.',
    ];

    $p4 = [
        'nome' => 'boné',
        'imagem' => '<p align=center><img src="img/bone.webp" width=20% /></p>',
        'preco' => 'R$ 21,30',
        'descricao' => 'proteja-se do sol com esse estiloso boné.',
    ];

    $p5 = [
        'nome' => 'tênis',
        'imagem' => '<p align=center><img src="img/tenis.webp" width=20% /></p>',
        'preco' => 'R$ 210,00',
        'descricao' => 'para corridas e atividades físicas opte por um calçado adequado.',
    ];


    $produtos = [
        $p1,
        $p2,
        $p3,
        $p4,
        $p5,
    ];

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
<table class="table table-hover table-stripped mt-5">
    <thead class="table-dark">
        <tr>
            <th><p align='center'>Nome</p></th>
            <th><p align='center'>Foto</p></th>
            <th><p align='center'>Preço</p></th>
            <th><p align='center'>Descrição</p></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($produtos as $cadaProduto)
            {
                echo "<tr>";
                    echo "<td>" . '<strong>' . $cadaProduto['nome'] . '</strong>' . "</td>";
                    echo "<td>" . $cadaProduto['imagem'] . "</td>";
                    echo "<td>" . $cadaProduto['preco'] . "</td>";
                    echo "<td>" . $cadaProduto['descricao'] . "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
</div>