


<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="includes/job_style.css">
<link rel="stylesheet" href="css/header.css">

<script>
   

	

</script>
<script src="includes/like_dislike.js"></script>


<head>
	<title>Job</title>
	<style>         
	                body{
						background-color:#f8f9fa;
					}

                    button{
					background-color: #4CAF50;
					color: white;
					border: none;
					padding: 5px 10px;
					font-size: 16px;
					cursor: pointer;
					border-radius:5px;
					}

					button:hover {
					background-color: green;
					
					}
                     



					


 


		
	</style>














</head>









<body>
	<header class="header">
		<div class="logo"><img src="images/CAS_logo.png" height="80px" width="250px"></div>
		<div class="menu">
			<abbr title="Home"><a href="home.php"><i class="fas fa-home" style="font-size: 30px;"></i> </a></abbr>
			<abbr title="profile"><a href="profile.php"><i class="fas fa-user" style="font-size: 30px;"></i> </a></abbr>
			<abbr title="alumni"><a href="alumni.php"><i class="fa-solid fa-people-group" style="font-size: 30px;"></i> </a></abbr>
			<abbr title="Eligibility Check"><a href="eligibility.php"><i class="fa-solid fa-arrows-to-eye" style="font-size: 30px;"></i> </a></abbr>
			<abbr title="Job"><a href="job.php"><i class="fa-solid fa-person-walking-luggage" style="font-size: 30px;"></i> </a></abbr>
			<abbr title="Summary"><a href="summary.php"><i class="fa-sharp fa-solid fa-chart-simple" style="font-size: 30px;"></i> </a></abbr>
		</div>
		<div class="profile">
			<?php 
                session_start();
				if(!isset($_SESSION['name']))
				{
				   header('location:index.php');
				}
				include ('includes/connect.php');
				$image="";
				$id=$_SESSION['id'];
						$sql = "SELECT * FROM student where student_id=$id";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_assoc($result)) {
						
						$image= $row["image"];
						}
				mysqli_close($conn);
			?>
		    <img src="images/<?php echo $_SESSION['id']; ?>.png"   onerror="this.onerror=null; this.src='<?php echo $image;?>';"      alt="Profile Image">
			<div style="text-align:center">
				<p>

					<?php
                     
                    
                    
                      echo $_SESSION['name'];
					  echo "<br>";
					  $id=$_SESSION['id'];
					  echo '<i style="color:black;font-size:15px;font-family:calibri ;">'.
					        $id.' </i> ';
                      //session_destroy();
                    
      

                   ?>
				</p>
				<a href="../controller/destroy.php" class="logout-btn">Logout</a>
			</div>
		</div>
	</header>


     <!-- header part end here -->

	 <style>
		 .container{
			padding-top:60px;
		 }

		 @media only screen and (max-width: 880px){
			.container{
			padding-top:250px;
		    }
			.left-box{
				width:100%;
				display:block;
			}
			.right-box{
				width:100%;
				display:block;
				
			}
			
			.container_p {
				display: block;
				height: auto;
				margin-top: 0px;
				background-color: #f8f9fa;
			}
			.profile-img{
				margin: 0 auto;
			}


		 }

    </style>




	<div class="container" >
  
	<?php
// Connect to MySQL database
include '../model/connect.php';
// include 'connect.php';

// Query database for job posts
$sql = "SELECT * FROM job";
$result = $conn->query($sql);
echo '<h1 style="text-align:center;">Find Your Next Job</h1><p style="text-align:center;font-size:12px">All job offered by our Alumni</p><br>';

?>



<style>
			.image-box{
			
				display: flex; 
				justify-content: center; 
				align-items: center; height: auto;
				margin-top:5%
			}
			.image-box img {
				
				width: 60%;
				height: 300px;
			}
			@media only screen and (max-width: 880px){
				.image-box img {
				
				width: 70%;
				height: 200px;
			  }
			}

	    </style>		

		<div class="image-box">
			<img src="images/job.png" alt="Image"  />
		</div> <br><br>













<?php
// Loop through job posts and display as HTML
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo '<div class="job-post">';
		echo '<div class="job-title">' . $row["title"] . '</div>';
		echo '<div class="job-meta">' . $row["poster_name"] . ' | ' . $row["time"] . '</div>';
		echo '<div class="job-description">' . nl2br($row["description"]). '</div><br>';
		echo ' <div class="like-dislike">
		<button class="like-button" onclick="like('. $row["id"] .')"><i class="fa fa-thumbs-up"></i> Like</button>
		<span id="like-count'.$row["id"].'">  '. $row["likes"] .' </span> &nbsp&nbsp&nbsp
		<button class="dislike-button" onclick="dislike('. $row["id"] .')" style=" background-color: #e74c3c;"><i class="fa fa-thumbs-down"></i> Dislike</button>
		<span id="dislike-count'.$row["id"].'">  '. $row["dislikes"] .' </span>
	  </div>';
	  echo '</div>';
	}
} else {
	echo "No job posts found.";
}

$conn->close();
?>
                                    

				
				
    
	</div>









    <br><br><br>
  
	<footer style="border-top: 1px solid orange; border-right: none; border-bottom: none; border-left: none;text-align: center;color:gray;font-size:12px;">
    <p style="margin: 0; padding: 5px;font-size:14px">Powered by <b>Career Assistant Team</b></p>
    <p style="margin: 0; padding: 5px;font-size:14px">Copyright © 2023 - 2023 Career Assistant Ltd. All rights reserved.</p>
	<br><br>

	
    
    </footer>








	</html>








	 