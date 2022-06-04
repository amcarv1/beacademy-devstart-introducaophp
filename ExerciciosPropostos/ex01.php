<form action="" method="post">
    <input name="num01" placeholder="Número 01..." /> </br>

    <input name="num02" placeholder="Número 02..." /> </br>

    <button name="somar">Somar</button>
    <button name="subtrair">Subtrair</button>
    <button name="multiplicar">Multiplicar</button>
    <button name="dividir">Dividir</button>

</form>

<?php

if ($_POST) {
    if (isset($_POST['somar'])) {
        echo $_POST['num01'] . " + " . $_POST['num02'] . " = " . $_POST['num01'] + $_POST['num02'];
        echo "<br>";
    }
    if (isset($_POST['subtrair'])) {
        echo $_POST['num01'] . " - " . $_POST['num02'] . " = " . $_POST['num01'] - $_POST['num02'];
        echo "<br>";
    }
    if (isset($_POST['dividir'])) {
        echo $_POST['num01'] . " / " . $_POST['num02'] . " = " . $_POST['num01'] / $_POST['num02'];
        echo "<br>";
    }
    if (isset($_POST['multiplicar'])) {
        echo $_POST['num01'] . " x " . $_POST['num02'] . " = " . $_POST['num01'] * $_POST['num02'];
    }
}
?>
