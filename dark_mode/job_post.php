


<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/profile_page.css">
<link rel="stylesheet" href="css/header.css">

<script>
   function showMessage() {
              alert("Job posted successfully");
     }

</script>


<?php 
              
				
				include ('includes/connect.php');
				$image="";
				session_start();
				$id=$_SESSION['id'];
						$sql = "SELECT * FROM student where student_id=$id";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_assoc($result)) {
						
						$image= $row["image"];
						}
				mysqli_close($conn);



?>

<?php

$imagePath = 'images/' . $_SESSION['id'] . '.png';
?>



<head>
	<title>Post job</title>
	<style>        
          
					.profile-img {
					width: 120px;
					height: 120px;
					border-radius: 50%;
					background-image: url('<?php echo $imagePath; ?>'), url('<?php echo $image; ?>');
					background-size: cover;
					background-position: center;
					margin-bottom: 80px;
}



             /* style for button */
	              body{
						background-color:#f8f9fa;
						font-size:15px;
					}

                    button{
					background-color: #4CAF50;
					color: white;
					border: none;
					padding: 5px 10px;
					font-size: 16px;
					cursor: pointer;
					border-radius:5px;
                    width:200px;
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
                $name=$_SESSION['name'];
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
			<div style="text-align:center;font-size:15px">
				<p>

					<?php
                     
                    
                    
                      echo '<span style="font-size:16px;">'.$_SESSION['name'].'</span>';
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

	<div class="container_p">
		<div class="left-box" style="height:auto">
			<div class="profile-img">
				
			</div>
			<div class="links">
			    <a href="profile.php">My Profile</a>
				<a href="update_profile.php">Update Profile</a>
				<a href="job_post.php">Post Job </a>
				<a href="send_feedback.php">Send Feedback</a>
				<a href="your_job.php">See Your Job Post</a>
				
			</div>
		</div>
		<div class="right-box" style="font-size:14px" >


                        <h1>Post a Job</h1>
                        <form method="post" action="../controller/post_job.php?poster_name=<?php echo $name.' '.$_SESSION['id']; ?> ">

                        <label for="job_title">Job Title:</label><br>
                        <input type="text" style="padding: 10px;width:300px"  id="job_title" name="job_title" ><br><br>

                        <label for="job_description">Job Description:</label><br>
                        <textarea style="padding: 10px;width:100%" id="job_description" name="job_description" rows="19" cols="130" ></textarea><br><br>

                        <button type="submit" name="post_job" value="button_value"  onclick="showMessage()">Post</button>

                        </form>



		</div>
	</div>
                                    
    			
    
	</div>
                 
    <br><br><br>
  
	<footer style="border-top: 1px solid orange; border-right: none; border-bottom: none; border-left: none;text-align: center;color:gray;font-size:12px;">
    <p style="margin: 0; padding: 5px;font-size:14px">Powered by <b>Career Assistant Team</b></p>
    <p style="margin: 0; padding: 5px;font-size:14px">Copyright © 2023 - 2023 Career Assistant Ltd. All rights reserved.</p>
	<br><br>

	
    
    </footer>












	</html>








	 