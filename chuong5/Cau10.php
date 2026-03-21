<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 10</title>
</head>
<body>

<form method="post">
    Nhập mảng: 
    <input type="text" name="mang">
    <input type="submit" value="Thực hiện">
</form>

<?php
if(isset($_POST["mang"])){

    $mang = $_POST["mang"];
    $arr = explode(",", $mang);

    // a. Xuất mảng
    echo "a. Mảng: ";
    foreach($arr as $x){
        echo $x . " ";
    }
    echo "<br>";

    // c. Đếm số chẵn
    $dem = 0;

    // d. Tổng số lẻ
    $tong = 0;

    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] % 2 == 0){
            $dem++;
        } else {
            $tong += $arr[$i];
        }
    }

    echo "c. Số chẵn: $dem<br>";
    echo "d. Tổng lẻ: $tong<br>";

   // e. Giá trị lớn nhất, nhỏ nhất
$max = $arr[0];
$min = $max; // cho bằng giá trị lớn nhất ban đầu

for($i = 1; $i < count($arr); $i++){
    if($arr[$i] > $max){
        $max = $arr[$i];
    }
    if($arr[$i] < $min){
        $min = $arr[$i];
    }
}

echo "e. Giá trị lớn nhất: $max<br>";
echo "   Giá trị nhỏ nhất: $min<br>";

    // f. Đảo ngược
    echo "f. Mảng đảo ngược: ";
    for($i = count($arr) - 1; $i >= 0; $i--){
        echo $arr[$i] . " ";
    }
}
?>

</body>
</html>