<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input name="linhas" placeholder="Número de linhas... "/>
        <input name="colunas" placeholder="Número de colunas... "/>
        <button type="submit">Enviar</button>
    </form>

    <?php

    if ($_POST) {
        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];
    }

    ?>
    <?php
        echo "<br>";

        echo "<table border='1'>";

        $contadorL = 1;
        while ($contadorL <= $linhas)         
        {

            echo "<tr>";

            $contadorC = 1;
            while ($contadorC <= $colunas) {
            ?>    
            <td>
                <?php echo "Linha $contadorL e Coluna $contadorC"?>
            </td>
            <?php
                $contadorC++;
            }

            echo "</tr>";
            $contadorL++;
        }

        echo "</table>";
    ?>
</body>
</html>
