<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listbox Năm</title>
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
            text-align: center;
        }
        select {
            width: 200px;
            padding: 5px;
        }
        .btn {
            margin-top: 10px;
            padding: 6px 15px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="box">
    <h3>Chọn năm</h3>

    <form method="post">
        <select name="year">
            <?php
            $currentYear = date("Y");
            for($i = 1900; $i <= $currentYear; $i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br>

        <input type="submit" value="Chọn" class="btn">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "<p>Bạn đã chọn năm: <b>" . $_POST["year"] . "</b></p>";
    }
    ?>
</div>

</body>
</html>