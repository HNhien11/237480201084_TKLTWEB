<?php
$host = "localhost"; 
$user = "root";        
$pass = "";            
$data = "quanly_banhang"; 

$con = mysqli_connect($host, $user, $pass, $data);
if (!$con){
    die("Connection failed: ".mysqli_connect_error());
}
echo "Connect successfully";
mysqli_close($con);
?>