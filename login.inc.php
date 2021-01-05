<?php
if (isset($_POST["submit"])) {
	$username=$_POST["uname"];
	$pwd=$_POST["pwd"];

    require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	loginUser($conn,$username,$pwd);
 
    if(emptyInputLogin($username,$pwd)!== false){
		header("Location:./login.php?error=emptyinput");
		exit();
	}

loginUser($conn,$username,$pwd);

}
else{
	header("location:./login.php");
	exit();
}