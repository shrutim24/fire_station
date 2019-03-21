<?php
require('textlocal.class.php');

$textlocal = new Textlocal(false,false,'');
$num='';
$num1='';
$numbers = array($num,$num1);
$sender = '';
$message = 'Hey';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>