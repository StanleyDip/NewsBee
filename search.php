<?php
include_once 'header.php';
include_once 'dbh.inc.php';
?>
<h1>Search Result:</h1>

		<?php
		if(isset($_POST['submit-search'])){
			$search=mysqli_real_escape_string($conn, $_POST['search']);
			$sql="SELECT * FROM `shared` WHERE `title` LIKE '%$search%' OR `sharedBy` LIKE '%$search%' OR `description` LIKE '%$search%' OR `author` LIKE '%$search%';";
			$result=mysqli_query($conn,$sql);
			$queryResult=mysqli_num_rows($result);

			if ($queryResult>0) {
				while ($row=mysqli_fetch_assoc($result)) {
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
			else{
				echo"No results found!";
			}
		}
		?>

