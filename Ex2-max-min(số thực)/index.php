<?php
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
