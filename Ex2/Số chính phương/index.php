<?php
// Tìm các số chính phương trong mảng.

function squareNumber($arr){
    $array = [];
    for ($i = 0; $i < count($arr) ; $i++){
        if (sqrt($arr[$i])*sqrt($arr[$i]) == $arr[$i]){
            $array[] = $arr[$i];
        }
    }
    return $array;
}
$arr = [4,1,16,11,2,18,5];
echo "Các số chính phương có trong mảng : ";
echo "<pre>";
print_r(squareNumber($arr));
