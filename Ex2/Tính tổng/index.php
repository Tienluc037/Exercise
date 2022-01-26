<?php
//Tính tổng mảng.

function sum($arr) {
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++){
        $sum += $arr[$i];
    }
    return $sum;
}
$arr = [1,2,5,8,3];
echo "<pre>";
print_r($arr);
echo "Tổng = " . sum($arr);
