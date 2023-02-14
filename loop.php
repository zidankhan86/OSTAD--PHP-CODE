<?php
$val = 7;
$num = 2 * $val - 2;
for ($i = 0; $i < $val; $i++)
{
for ($j = 0; $j < $num; $j++)
echo " ";
$num = $num - 1;
for ($j = 0; $j <= $i; $j++ )
{
echo "* ";
}
echo "\n";
}
?>