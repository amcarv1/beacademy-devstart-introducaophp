<form action="" method="post">
    <input type="text" name="nome" />
    <button>Enviar</button>
</form>

<?php

    if ($_POST) 
    {
        echo $_POST['nome'];
    }

?>