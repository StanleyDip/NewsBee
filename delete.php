
<?php 
include_once 'header.php';
include_once 'dbh.inc.php';



$title=$_GET['title'];

$sharedby=$_SESSION['useruid'];

// ('$title','$url','$author','$image','$description','$language','$publish','$country','$sharedby');"
$sql="DELETE FROM `shared` WHERE `title`='$title' AND `sharedBy`='$sharedby';";
                    
  $data=mysqli_query($conn, $sql);
 	if($data){
 		header("Location:./mycollection.php?success");
 	}
 	else{
 		header("Location:./mycollection.php?failed");
 	}
  //header("Location:./mycollection.php");
// echo"
//  <div class='card'>
//                         <div class='title'>
//                           <p>Title: <a href='$url' title='$title'>${title}</a></p>
//                           <p><b>Author</b>: ${author} </p>
//                         </div>
//                           <div class='header'>
//                             <img src='${image}' alt='${title}'>
//                           </div>

//                           <div class='container'>
//                                       <p class='description'><b>Description</b>: ${description}</p>
//                                       <p><b>Language</b>: ${language} </p>
//                                       <p><b>Published</b>: ${publish} </p>
//                                       <p><b>Country</b>:${country} </p>
//                                       <p><b>Shared by</b>:${sharedby}</p>
//                                       <p><a href='${url}' target='_blank'><button class='activebtn' id='readmore'>Read More</button></a></p>

//                           </div>
//                         </div> ";