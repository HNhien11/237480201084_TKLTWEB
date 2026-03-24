<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bảng số n và n²</title>
    <style>
        table {
            border-collapse: collapse;
            width: 200px;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h3>Bảng số n và n²</h3>

<table>
    <tr>
        <th>Số n</th>
        <th>Số n²</th>
    </tr>

    <?php
    for($i = 0; $i <= 50; $i++){
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>" . ($i * $i) . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>