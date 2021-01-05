<?php
  session_start();
?> 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="csfile.css">
<!-- <link rel="stylesheet" type="text/css" href="homepagecss.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="topnav">
    <a class="active" href="./index.php">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
                  <!-- ?php
                  if(isset($_SESSION["useruid"])){
                  echo "<a  class='active' href='logout.php'>Log out</a>";
                  echo "<a  href='mycollection.php'>My Collections</a>";
                  echo "<a  href='beenews.php'>BeeNews</a>";
                }
                  else{
                     echo "<a href='login.php'>Login</a>";
                  }
                ?>
      <form class="example" action="/action_page.php" style="margin-right: 35px;max-width:200px;height:50px ;float:right; ">
            <input type="text" placeholder="Search.." name="search2"><button class="none" type="submit"><i class="fa fa-search"></i></button>
      </form> -->
            
  </div> 
 <!--  <h1>News<span class="spanred">Bee</span></h1> -->
<h2>Login Form</h2>
<form action="login.inc.php" method="post">
  <div class="imgcontainer">
    <img src="logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
        
    <button type="submit" name="submit" class="loogin">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

 <?php

if(isset($_GET["error"])){
  if ($_GET["error"]=="emptyinput") {
      echo "<p>Fill in all fields!</p>";
  }
  else if ($_GET["error"]=="wronglogin") {
      echo "<p class='spanred' 'spancenter'>Incorrect Credentials!</p>";
  }
}

?>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="index.php">Cancel</a></button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>