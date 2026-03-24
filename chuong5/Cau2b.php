<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Nhập thông tin sinh viên</title>
</head>

<body>

<h2>Nhập thông tin sinh viên</h2>

<form method="post">
<table>
<tr>
    <td>Họ và tên:</td>
    <td><input type="text" name="hoten"></td>
</tr>

<tr>
    <td>Ngày sinh:</td>
    <td><input type="text" name="ngaysinh"></td>
</tr>

<tr>
    <td>Lớp:</td>
    <td><input type="text" name="lop"></td>
</tr>

<tr>
    <td>Điểm:</td>
    <td><input type="text" name="diem"></td>
</tr>

<tr>
    <td><input type="submit" value="Gửi"></td>
    <td></td>
</tr>
</table>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $hoten = $_POST["hoten"];
    $ngaysinh = $_POST["ngaysinh"];
    $lop = $_POST["lop"];
    $diem = $_POST["diem"];

    echo "<h3>Thông tin sinh viên</h3>";
    echo "Họ và tên: $hoten <br>";
    echo "Ngày sinh: $ngaysinh <br>";
    echo "Lớp: $lop <br>";
    echo "Điểm: $diem";
}
?>

</body>
</html>