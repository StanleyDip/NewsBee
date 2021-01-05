<?php

if (isset($_POST["submit"])) {
	$name=$_POST["fname"];
	$email=$_POST["email"];
	$country=$_POST["country"];
	$username=$_POST["uname"];
	$pwd=$_POST["pwd"];
	$pwdRepeat=$_POST["pwdrepeat"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if(emptyInputSignup($name,$username,$email,$country,$pwd,$pwdRepeat)!== false){
		header("Location:./index.php?error=emptyinput");
		exit();
	}
	if(invalidUid($username)!==false){
		header("Location:./index.php?error=invalidname");
		exit();
	}
	if(invalidEmail($email)!==false){
		header("Location:./index.php?error=invalidemail");
		exit();
	}
	if(pwdMatch($pwd, $pwdRepeat)!==false){
		header("Location:./index.php?error=passwordsdontmatch");
		exit();
	}
	if(uidExists($conn, $username,$email)!==false){
		header("Location:./index.php?error=uidtaken");
		exit();
	}
//all passed :) 
	createUser($conn, $name, $email, $username,$country,$pwd);
}

else{
	header("location:./index.php");
}