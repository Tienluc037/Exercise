<?php
//Tạo ngẫu nhiên một mảng arr gồm N phần tử nguyên.

function createArr($number) {
    $arr = [];
    for ($i = 0; $i < $number ; $i++) {
        $arr[] = rand(1,50);
    }
    return $arr;
}

//print_r(createArr(5));


//echo "<hr>";

//Sắp xếp arr theo thứ tự tăng dần.

$arr = createArr(5);
echo "<pre>Tạo mảng ngẫu nhiên ";
print_r($arr);

function sortArray($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $min = $arr[$i];
        $index = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($min > $arr[$j]) {
                $min = $arr[$j];
                $index = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $min;
        $arr[$index] = $temp;
    }
    return $arr;

}

$arr = sortArray($arr);
echo "<pre><hr> Sắp xếp mảng tăng dần";
print_r($arr);