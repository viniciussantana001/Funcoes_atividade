<?php

$n1 = $_POST['n1'];

function verificaridade($n1)
{
  if ($n1 < 18){
    echo "Menor de idade";
  }
  else if ($n1 >= 60){
    echo "Idoso";
  }
  else{
    echo "Adulto";
  }
}

verificaridade($n1);
?>