<?php
# array-less
$num1 = 1;
$num2 = 2;
$num3 = 0;
$total = $num2;

while ($num3 < 4000000)
{
    $num3 = $num1 + $num2;
    if ($num3 % 2 == 0){
        $total+=$num3;
    }
    $num1 = $num2;
    $num2 = $num3;
}
echo $total;
?>

