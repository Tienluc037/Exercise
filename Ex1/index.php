<?php
//Tạo ngẫu nhiên một mảng arr gồm N phần tử nguyên.

function createArr($number) {
    $arr = [];
    for ($i = 0; $i < $number ; $i++) {
        $arr[] = rand(1,50);
    }
    return $arr;
}

print_r(createArr(5));