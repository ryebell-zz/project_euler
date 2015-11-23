<?php

$count = 0;
$total = 0;
while ($count < 1000) {
    if ($count % 3 == 0 || $count % 5 == 0) {
        $total = $total + $count;
    }
    $count = $count + 1;
    }
echo $total ."\n";
?>
