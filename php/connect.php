<?php 
error_reporting(E_ALL);
$conn = new mysqLi('localhost','root','','blog'); //เชื่อม database
$conn->set_charset('utf8'); // ภาษาไทย
if ($conn->connect_errno){
    echo "Connect Error:".$conn->connect_error;
    exit();
}
?>