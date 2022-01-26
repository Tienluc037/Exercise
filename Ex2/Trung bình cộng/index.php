<?php
//Tính trung bình cộng các phần tử mảng.

function average($arr){
    $sum = 0;
    for ($i = 0; $i < count($arr) ; $i++){
        $sum += $arr[$i];
    }
    return $sum/count($arr);
}
$arr = [1,3,8,6,4,5];
echo "<pre>";
print_r($arr);
echo "Average = " . average($arr);