<?php
include 'config.php';
$email='moninmodi@gmail.com';
$psw='monin@12345';
$qy = "SELECT * FROM USER_LOGIN WHERE U_login_id = '$email' AND U_password= '$psw'";
$log = $conn->query($qy);
// $num = $log->num_rows;
$row = $log->fetch_assoc();
print_r ($row['U_login_id']);
?>