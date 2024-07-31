<?php
$con = mysqli_connect('localhost','iotvehic_vtacc','~F0BmU5&q(X%','iotvehic_vtacc');
if(!empty($_REQUEST))
{
$temp = @$_REQUEST['temp'];
$lat = @$_REQUEST['lat'];
$lon = @$_REQUEST['lon'];
$gid = @$_REQUEST['gid'];
$gct = @$_REQUEST['gct'];

$sql = "UPDATE dus SET temp='".$temp."',lat='".$lat."',lon='".$lon."',gid='".$gid."',gct='".$gct."' WHERE gid=".$gid;

mysqli_query($con, $sql);
///////////////////////////////////////////////////////////////////////////	

if($temp == 30)
{
$to      = 'lahari2310@gmail.com';
$subject = ' IOT Smart Dustbin Using NodeMCU';
$message = 'ULTRASONIC SENSOR ='.$temp;
$message .= "DUST BIN EMPTY Alert."."\r\n";
$message .= "http://iotvehicle.co.in/iot_smart_dustbin/index.php"."\r\n";
$headers = 'From: lahari2310@gmail.com' . "\r\n" .
    'Reply-To: lahari2310@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'myakaprakash@gmail.com';
$subject = ' IOT Smart Dustbin Using NodeMCU';
$message = 'ULTRASONIC SENSOR ='.$temp;
$message .= "DUST BIN EMPTY Alert."."\r\n";
$message .= "http://iotvehicle.co.in/iot_smart_dustbin/index.php"."\r\n";
$headers = 'From: lahari2310@gmail.com' . "\r\n" .
    'Reply-To: lahari2310@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

}


if($temp == 3)
{
$to      = 'lahari2310@gmail.com';
$subject = ' IOT Smart Dustbin Using NodeMCU';
$message = 'ULTRASONIC SENSOR ='.$temp;
$message .= "DUST BIN FULL Alert."."\r\n";
$message .= "http://iotvehicle.co.in/iot_smart_dustbin/index.php"."\r\n";
$headers = 'From: lahari2310@gmail.com' . "\r\n" .
    'Reply-To: lahari2310@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'myakaprakash@gmail.com';
$subject = ' IOT Smart Dustbin Using NodeMCU';
$message = 'ULTRASONIC SENSOR ='.$temp;
$message .= "DUST BIN FULL Alert."."\r\n";
$message .= "http://iotvehicle.co.in/iot_smart_dustbin/index.php"."\r\n";
$headers = 'From: lahari2310@gmail.com' . "\r\n" .
    'Reply-To: lahari2310@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

}


}
?>



