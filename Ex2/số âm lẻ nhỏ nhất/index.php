<?php
//Tìm số âm lẻ nhỏ nhất trong mảng.

function searchMin($arr){
    $min = $arr[0];
    for ($i = 1; $i < count($arr) ; $i++){
        if ($arr[$i] < $min && $arr[$i] < 0 && $arr[$i] % 2 != 0){
            $min = $arr[$i];
        }
    }
    return $min;
}
$arr = [1,5,-3,6,-9,-1];
echo "<pre>";
print_r($arr);
echo "Số âm nhỏ nhất là :" . searchMin($arr);
