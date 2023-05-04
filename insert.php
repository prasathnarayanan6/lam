<?php
require_once "conn.php";
$id = $_GET['id'];
$s1 = $_GET['s1'];
$s2 = $_GET['s2'];
$s3 = $_GET['s3'];
$s4 = $_GET['s4'];
$s5 = $_GET['s5'];
$s6 = $_GET['s6'];
$s7 = $_GET['s7'];
$s8 = $_GET['s8'];
$s9 = $_GET['s9'];
$s10 = $_GET['s10'];
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d_H:i:s");
$sql = "INSERT INTO data(id, s1, s2, s3, s4, s5, s6, s7, s8, s9, s10, date) VALUES('$id', '$s1', '$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8', '$s9', '$s10', '$date')";
if($conn->query($sql)){
    echo "INSERTED SUCCESSFULL";
}
?>
