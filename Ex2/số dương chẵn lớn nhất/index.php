<?php
//Tìm số dương chẵn lớn nhất trong mảng.

function searchMax($arr){
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++ ) {
        if($max < $arr[$i] && $arr[$i] > 0 && $arr[$i] % 2 == 0) {
            $max = $arr[$i];
        }
    }
    return $max;
}
$arr = [1,5,6,7,8,-4,-1];
echo "<pre>";
print_r($arr);
echo "Số chẵn lớn nhất là :" . searchMax($arr);

