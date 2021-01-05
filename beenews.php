
<?php 
	include_once 'dbh.inc.php' ;
	include_once 'header.php';
 ?>
<?php
echo "<h2>Shared by Other Members:</h2>";
$session=$_SESSION['useruid'];
$sql="SELECT * FROM shared WHERE sharedBy!='$session';";
$result =mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if ($resultCheck>0) {
	while($row =mysqli_fetch_assoc($result)){
		echo"
 <div class='card'>
                        <div class='title'>";
                         echo" <p>Title: <a href=".$row['url']."title=".$row['title'].">".$row['title']."</a></p>";
                         echo" <p><b>Author</b>:".$row['author']."</p>";
                       echo" </div>
                          <div class='header'>";
                          echo"  <img src=".$row['image']."alt=".$row['title'].">
                          </div>

                          <div class='container'>";
                                     echo" <p class='description'><b>Description</b>:" .$row['description']."</p>";
                                      echo" <p><b>Language</b>:".$row['languages']."</p>";
                                    echo"  <p><b>Published</b>: ". $row['publish']."</p>";
                                     echo"  <p><b>Country</b>:".$row['country']."</p>";
                                      echo" <p><b>Shared by</b>:". $row['sharedBy']."</p>";
                                      echo" <p><a href=".$row['url']."target='_blank'><button class='activebtn' id='readmore'>Read More</button></a></p>";
                                      
                        echo"  </div>";
                       echo" </div> ";
	}
}
?>

</body>
<!-- echo" <p><a href=".$row['url']."target='_blank'><button class='activebtn' id='readmore'>Read More</button></a></p>"; -->
</html>

 