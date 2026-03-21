<?php
// 1. Xử lý Logic tính toán
$so1 = isset($_POST['so1']) ? $_POST['so1'] : "";
$so2 = isset($_POST['so2']) ? $_POST['so2'] : "";
$phep_tinh = isset($_POST['phep_tinh']) ? $_POST['phep_tinh'] : "";
$ket_qua = "";

if ($phep_tinh != "" && is_numeric($so1) && is_numeric($so2)) {
    switch ($phep_tinh) {
        case "Cộng": $ket_qua = $so1 + $so2; break;
        case "Trừ":  $ket_qua = $so1 - $so2; break;
        case "Nhân": $ket_qua = $so1 * $so2; break;
        case "Chia": 
            $ket_qua = ($so2 != 0) ? round($so1 / $so2, 2) : "Lỗi chia 0"; 
            break;
        case "Mod":  
            $ket_qua = ($so2 != 0) ? $so1 % $so2 : "Lỗi chia 0"; 
            break;
    }
}

// 2. Xuất giao diện bằng PHP (Sử dụng cú pháp HEREDOC để code sạch sẽ)
echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        .container {
            width: 400px;
            border: 2px solid #000;
            border-radius: 30px; /* Bo góc khung như ảnh */
            padding: 20px;
            margin: 50px auto;
            font-family: Arial, sans-serif;
        }
        h2 { text-align: center; margin-bottom: 5px; text-transform: uppercase; }
        hr { border: 0; border-top: 1px solid #000; margin-bottom: 20px; width: 80%; }
        .row { margin: 10px 0; display: flex; align-items: center; }
        label { width: 90px; font-weight: bold; }
        input[type="text"] { width: 150px; border: 1px solid #999; padding: 3px; }
        .btn-group { text-align: center; margin-top: 20px; }
        input[type="submit"] {
            background: #d1d1d1;
            border: 1px solid #000;
            border-radius: 8px; /* Bo góc nút bấm */
            padding: 5px 12px;
            margin: 2px;
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]:hover { background: #bbb; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tính toán số học</h2>
        <hr>
        <form method="post">
            <div class="row">
                <label>Số thứ 1:</label>
                <input type="text" name="so1" value="$so1">
            </div>
            <div class="row">
                <label>Số thứ 2:</label>
                <input type="text" name="so2" value="$so2">
            </div>
            <div class="row">
                <label>Kết quả:</label>
                <input type="text" name="ket_qua" value="$ket_qua" readonly style="background:#eee">
            </div>
            <div class="btn-group">
                <input type="submit" name="phep_tinh" value="Cộng">
                <input type="submit" name="phep_tinh" value="Trừ">
                <input type="submit" name="phep_tinh" value="Nhân">
                <input type="submit" name="phep_tinh" value="Chia">
                <input type="submit" name="phep_tinh" value="Mod">
            </div>
        </form>
    </div>
</body>
</html>
HTML;
?>