<select>
    <option selected> -- Selecione o Dia -- </option>
    <?php

        for ($dia = 1; $ano <= 31; $ano++) {
            echo "<option>{$ano}</option>";
        }
    ?>
</select>

<select>
    <?php
        for ($mes = 1; $mes <= 12; $mes++) {
            $dataMes;
            switch($mes) {
                case 1:
                    echo "<option>Janeiro</option>";
                    $dataMes = "Janeiro";
                    break;
                case 2:
                    echo "<option>Fevereiro</option>";
                    break;
                case 3:
                    echo "<option>Março</option>";
                    break;
                case 4:
                    echo "<option>Abril</option>";
                    break;
                case 5:
                    echo "<option>Maio</option>";
                    break;
                case 6:
                    echo "<option>Junho</option>";
                    break;
                case 7:
                    echo "<option>Julho</option>";
                    break;
                case 8:
                    echo "<option>Agosto</option>";
                    break;
                case 9:
                    echo "<option>Setembro</option>";
                    break;
                case 10:
                    echo "<option>Outubro</option>";
                    break;
                case 11:
                    echo "<option>Novembro</option>";
                    break;
                case 12:
                    echo "<option>Dezembro</option>";
                     break;
            }
        }

    ?>
</select>