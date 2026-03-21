<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dãy số 1 đến 100</title>
    <style>
        body {
            font-family: Arial;
        }
        .box {
            width: 500px;
            margin: 50px auto;
            border: 2px solid black;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        .number {
            font-size: 18px;
            line-height: 30px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>DÃY SỐ TỪ 1 ĐẾN 100</h2>

    <div class="number">
        <?php
        for($i = 1; $i <= 100; $i++){
            if($i % 2 == 0){
                echo "<b>$i</b> ";
            } else {
                echo "$i ";
            }
        }
        ?>
    </div>
</div>

</body>
</html>