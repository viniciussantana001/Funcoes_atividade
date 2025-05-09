<?php

$n1 = $_POST['n1'];

function ParOuImpar($n1)
{
   if ($n1 %2 == 0)

   {
    echo "O numero é Par";
   }

   else 
   {
    echo "O numero é Impar";
   }
}
ParOuImpar($n1);
?>