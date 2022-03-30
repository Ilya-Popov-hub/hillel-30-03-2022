<?php
$a = [1, 2, 3, 4, 5, 6, 100, null, 4.1];

function arraySum($array)
{
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}

echo 'Значения массива: ' . '<br>';
var_dump($a);
echo '<br>';
$y = arraySum($a);
echo 'Сумма значений массива: ' . '<br>';
echo $y . '<br>';
echo 'Проверка с помощью array_sum(): ' . '<br>';
echo array_sum($a);