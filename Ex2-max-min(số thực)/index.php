<?php

//Nhập một mảng gồm N số thực.

function createFloatArr($number) {
    $arr = [];
    for ($i = 0; $i < $number ; $i++) {
        $arr[] = rand(10,1000)/100;
    }
    return $arr;
}

$arr = createFloatArr(5);
echo "<pre>Tạo mảng số thực ngẫu nhiên ";
print_r($arr);


//Tìm số lớn nhất trong mảng.
function searchMax($arr)
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

$arr = searchMax($arr);
echo "<pre><hr>Số lớn nhất trong mảng là: ";
print_r($arr);


//Tìm số nhỏ nhất trong mảng.
function searchMin($arr){
    $min = $arr[0];
    for ($i = 1; $i < count($arr) ; $i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    return $min;
}
$arr = searchMin($arr);
echo "<pre><hr>Số nhỏ nhất trong mảng là: ";
print_r($arr);


