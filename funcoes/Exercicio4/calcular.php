<?php

$n1 = $_POST['n1'];

function converterParaCelsius($n1)
{
    return  ($n1 - 32) * 5/9;
}

echo "O Valor dado convertido para celsius é ".converterParaCelsius($n1)."°";
?>