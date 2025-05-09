<?php 

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

function maiorNumero($n1,$n2,$n3)
{
    if ($n1 >= $n2 && $n2 >= $n3)
   {
     echo "O maior é ".$n1;
   }
   else if ($n2 > $n1 && $n2 > $n3)
   {
    echo "O maior é ".$n2;
   }
   else if ($n3 > $n1 && $n3 > $n2)
   {
    echo "O maior é ".$n3;
   }
}
maiorNumero($n1,$n2,$n3);
?>