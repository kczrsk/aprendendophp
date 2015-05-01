<?php
/* Dadas 3 notas (n1, n2, n3), calcule a média e o status segundo a
especificação:
Média maior ou igual a 6: APROVADO
Média maior ou igual a 5: EXAME
Média menor que 5: REPROVADO
*/

$n1 = 6;
$n2 = 8;
$n3 = 3;

$media = ($n1+$n2+$n3)/3;
echo $media. "<br>";

if (($media >= 5) && ($media < 6))
{echo "EXAME";}
else if ($media >= 6)
{echo "APROVADO";}
else
{echo "REPROVADO";}

?>
