<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tính USCLN và BSCNN</title>
    <style>
        body {
            font-family: Arial;
        }
        .box {
            width: 350px;
            margin: 50px auto;
            border: 2px solid black;
            border-radius: 20px;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        input[type="number"], input[type="text"] {
            width: 180px;
            padding: 5px;
            margin: 5px 0;
        }
        .btn {
            padding: 8px 20px;
            margin: 10px 5px;
            border-radius: 10px;
            border: 1px solid black;
            background: #eee;
            cursor: pointer;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>TÍNH USCLN VÀ BSCNN</h2>

    <form method="post">
        Số thứ 1:
        <input type="number" name="a" required><br>

        Số thứ 2:
        <input type="number" name="b" required><br>

        Kết quả:
        <input type="text" value="<?php if(isset($result)) echo $result; ?>" readonly><br>

        <div class="center">
            <input type="submit" name="uscln" value="USCLN" class="btn">
            <input type="submit" name="bscnn" value="BSCNN" class="btn">
        </div>
    </form>
</div>

<?php
function USCLN($a, $b){
    while($b != 0){
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["a"];
    $b = $_POST["b"];

    if(isset($_POST["uscln"])){
        $result = USCLN($a, $b);
    }

    if(isset($_POST["bscnn"])){
        $result = ($a * $b) / USCLN($a, $b);
    }
}
?>

</body>
</html>