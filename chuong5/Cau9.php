<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bảng cửu chương</title>
</head>
<body>

<table>
<?php
$count = 1;

for($row = 1; $row <= 2; $row++){
    echo "<tr>";

    for($col = 1; $col <= 5; $col++){
        echo "<td valign='top' style='padding:10px;'>";

        echo "<b>Bảng $count</b><br>";
        for($i = 1; $i <= 10; $i++){
            echo "$count x $i = " . ($count * $i) . "<br>";
        }

        echo "</td>";
        $count++;
    }

    echo "</tr>";
}
?>
</table>

</body>
</html>