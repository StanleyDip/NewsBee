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
                  <?php
                  if(isset($_SESSION["useruid"])){
                  echo "<a  class='active' href='logout.php'>Log out</a>";
                  echo "<a  href='mycollection.php'>My Collections</a>";
                  echo "<a  href='beenews.php'>BeeNews</a>";
                }
                  else{
                     echo "<a href='login.php'>Login</a>";
                  }
                ?>
            
  </div> 
<h2>Sign-Up Form</h2>

<form action="signup.inc.php" method="post">
  <div class="imgcontainer">
    <img src="logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>FullName:</b></label>
    <input type="text" placeholder="Enter Your Fullname..." name="fname" required>

    <label for="email"><b>Email:</b></label>
    <input type="text" placeholder="Enter Your Email address..." name="email" required>

    <label for="country"><b>Country</b></label>
    <input type="text" placeholder="Enter Your Country Name..." name="country" required>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username..." name="uname" required>

    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password..." name="pwd" required>
        
       <label for="pwdrepeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password..." name="pwdrepeat" required> 

    <button type="submit" name="submit">Submit</button>
  </div>
 <?php

if(isset($_GET["error"])){
  if ($_GET["error"]=="emptyinput") {
      echo "<p>Fill in all fields!</p>";
  }
  else if ($_GET["error"]=="invaliduid") {
      echo "<p>Choose a proper username!</p>";
  }
  else if ($_GET["error"]=="invalidemail") {
      echo "<p>Choose a proper email!</p>";
  }
  else if ($_GET["error"]=="passworddontmatch") {
      echo "<p>Password doesn't match!</p>";
  }
  else if ($_GET["error"]=="uidtaken") {
      echo "<p class='spanred'>Username already taken!</p>";
  }
  else if ($_GET["error"]=="stmtfailed") {
      echo "<p>Something went wrong, try again!</p>";
  }
  else if ($_GET["error"]=="none") {
      echo "<p class='spanred' >You have signed up!</p>";
  }
}

?>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Already a <a href="login.php">Member?</a></span>
  </div>
 
</form>



<?php
 include_once 'footer.php';
?>