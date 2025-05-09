<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

function multiplicar($n1, $n2)
{
    return $n1 * $n2;
}

echo "Multiplicacao dos dois numeros sao: ".multiplicar($n1, $n2);
?>