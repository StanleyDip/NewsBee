<?php
	session_start();
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="csfile.css">
<link rel="stylesheet" type="text/css" href="homepagecss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="topnav">
    <a class="active" href="./index.php">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
                  <?php
                  if(isset($_SESSION["useruid"])){
                  echo "<a  href='news.php'>HomePage</a>";
                	echo "<a  class='active' href='logout.php'>Log out</a>";
                  echo "<a  href='mycollection.php'>My Collections</a>";
                  echo "<a  href='beenews.php'>BeeNews</a>";

                }
                  else{
                	   echo "<a href='login.php'>Login</a>";
                  }
                ?>
      <form class="example" action="search.php" method="POST"style="margin-right: 35px;max-width:200px;height:50px ;float:right; ">
            <input type="text" placeholder="Search.." name="search"><button class="none" type="submit" name="submit-search"><i class="fa fa-search"></i></button>
      </form>
            
  </div> 
 <!--  <h1>News<span class="spanred">Bee</span></h1> -->