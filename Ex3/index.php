<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="str" placeholder="Nhập chuỗi cần kiểm tra">
    <input type="text" name="search" placeholder="Nhập ký tự cần kiểm tra">
    <button>Check</button>
</form>
<br>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $str = $_REQUEST["str"];
    $search = $_REQUEST["search"];
    echo "Chuỗi cần kiểm tra : ".$str;
    echo "<br>";
    if (empty(checkNumber($str))){
        echo "Không có số nào trong chuỗi.";
    }else{
        echo "Các số trong chuỗi là : ".checkNumber($str);
    }
    echo "<br>";
    if (empty(Capitalization($str))){
        echo "Không có ký tự in hoa trong chuỗi.";
    }else{
        echo "Các ký tự in hoa trong chuỗi là : ".Capitalization($str);
    }

    echo "<br>";
    echo checkIsset($str,$search);
}
?>


<?php
function checkNumber($str){
    $regex="/^[0-9]/";
    $str1="";
    for ($i = 0; $i < strlen($str);$i++){
        if (preg_match($regex,$str[$i])){
            $str1 .=$str[$i];
        }
    }
    return $str1;
}
function Capitalization($str){
    $regex = "/^[A-Z]/";
    $str1="";
    for ($i = 0; $i < strlen($str);$i++){
        if (preg_match($regex,$str[$i])){
            $str1 .=$str[$i];
        }
    }
    return $str1;
}

function checkIsset($str, $search){
    for ($i = 0; $i < strlen($str) ; $i++){
        if ($str[$i] === $search){
            return "Có ký tự $search trong chuỗi.";
        }
    }return "Không có ký tự $search trong chuỗi.";
}

?>
