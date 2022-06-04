<select>
    <option selected> -- Selecione o Ano -- </option>
    <?php

        for ($ano = 2022; $ano >= 1999; $ano--) {
            echo "<option>{$ano}</option>";
        }
        $ano = 2022;

        while ($ano >= 1999) {
            echo "<option>{$ano}</option>";
            $ano--;
        }
    ?>
</select>