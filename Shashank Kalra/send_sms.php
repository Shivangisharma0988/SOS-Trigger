<?php

$msg=$_GET['varname'];
$phone_no=$_POST['phone'];

	$username = "shashankkalra1114@gmail.com";
	$hash = "f002e824429e1b6ccd8935591f10bf03718a6dce4fa9999e58236b0f0caeab9f";

	
	$test = "0";

	$sender = "TXTLCL"; 
	$numbers = "91".$phone_no; 
	$message = $msg;
	if(strlen($message)>612)
	{
     echo "message is too large";
	}
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); 
	curl_close($ch);

	






?>