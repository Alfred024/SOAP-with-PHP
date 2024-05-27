<?php 

    $money;
    $moneyType;

    if (isset( $_REQUEST['numValue'])) {
        $money = $_REQUEST['numValue'];
        $moneyType = $_REQUEST['moneyType'];

        $url = 'https://www.xe.com/currencyconverter/convert/?Amount='.$money.'&From='.$moneyType.'&To=USD';
        $result = file_get_contents($url);
        // echo ($result);
        // $result = explode('<span class="faded-digits">', $result)[0]; // 0 es corta antes de
        $result = explode('<p class="sc-1c293993-1 fxoXHw">', $result)[1]; // 1 es corta después de
        echo "<p>{$money} convertido a dólares: <strong>{$result}</strong> </p>";
    };
?>