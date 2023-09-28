<?php
session_start();
include_once('class.phpmailer.php');
$con=mysqli_connect('localhost','root','','youtube');
$email=$_POST['email'];
$res=mysqli_query($con,"select * from user where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
	$otp=rand(11111,99999);
	mysqli_query($con,"update user set otp='$otp' where email='$email'");
	$html="Your otp verification code is ".$otp;
	$_SESSION['EMAIL']=$email;
	smtp_mailer($email,'OTP Verification',$html);
	echo "yes";
	include_once('class.phpmailer.php');
}else{
	echo "not_exist";
}

function smtp_mailer($to,$subject, $msg){
	require_once("smtp/class.phpmailer.php");
	$mail = new PHPMailer(true); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'TLS'; 
	$mail->Host = "smtp.sendgrid.net";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "kaziratun2020@gmail.com";
	$mail->Password = "ezivwzmodqgfaqvw";
	$mail->SetFrom("kaziratun2020@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}
?>