
<?php 
include_once 'header.php';
include_once 'dbh.inc.php';



$title=$_GET['title'];
$url=$_GET['url'];
$author=$_GET['author'];
$image=$_GET['image'];
$description=$_GET['description'];
$language=$_GET['language'];
$publish=$_GET['publish'];
$country=$_GET['country'];
$sharedby=$_SESSION['useruid'];
// ('$title','$url','$author','$image','$description','$language','$publish','$country','$sharedby');"

$sql="INSERT INTO `shared` (`title`,`url`,`author`,`image`,`description`,`languages`,`publish`,`country`,`sharedBy`)
                          VALUES
                          (?,?,?,?,?,?,?,?,?);";
    $stmt =mysqli_stmt_init($conn);  
    mysqli_stmt_prepare($stmt,$sql);                      
  mysqli_query($conn, $sql);
  mysqli_stmt_bind_param($stmt,"sssssssss",$title,$url,$author,$image,$description,$language,$publish,$country,$sharedby);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("Location:./mycollection.php");
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