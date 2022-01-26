<?php
//Sắp xếp mảng theo trật tự giảm dần.

function sortDescending($arr){
    rsort($arr);
    return $arr;
}
$arr = [1,9,5,0,3,7,5];
echo "<pre>";
print_r(sortDescending($arr));