


<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/profile_page.css">
<link rel="stylesheet" type="text/css" href="includes/job_style.css">



<script>
   function showMessage() {
              alert("Feedback sent successfully");
     }

</script>


<head>
	<title>Your Job Post</title>
	<style>        
          
					.profile-img {
					width: 120px;
					height: 120px;
					border-radius: 50%;
					background-image: url('images/<?php  session_start(); echo $_SESSION['id']?>.png');
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
					}

					button:hover {
					background-color: green;
					
					}



 


		/* Style for the header */
		
		.header {
			position: fixed;
			top: 0;
			left: 5%;
			width: 90%;
			margin: auto;
			background-color: #fb980a;
			color: #fff;
			padding: 10px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			z-index: 999;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
		}

		/* Style for the logo */
		.logo {
			font-size: 24px;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		/* Style for the menu */
		.menu {
			display: flex;
			align-items: center;

		}

		.menu a {
			color: #333;
			margin: 0 10px;
			text-decoration: none;
			font-weight: bold;
			transition: all 0.3s ease-in-out;
			position: relative;
			letter-spacing: 20px;
			text-align: center;
		}

    .menu a:hover{
       
    }

		.menu a::before {
			content: "";
			position: absolute;
			bottom: -5px;
			left: 0;
			height: 2px;
			width: 100%;
			background-color: #333;
			transform: scaleX(0);
			transform-origin: left;
			transition: all 0.3s ease-in-out;
		}

		.menu a:hover::before {
			transform: scaleX(0.6);
			background-color: white;
     
		}

		/* Style for the profile */
		.profile {
			display: flex;
			align-items: center;
		}

		.profile img {
			width: 40px;
			height: 40px;
			border-radius: 50%;
			margin-right: 10px;
		}


		.logout-btn {
			background-color: red;
			color: #fff;
			padding: 5px 10px;
			border-radius: 5px;
			text-decoration: none;
			margin-left: 10px;
			font-size: 14px;
		}

		.logout-btn:hover {
			background-color: #ff5733;
			color: #fff;
			padding: 5px 10px;
			border-radius: 5px;
			text-decoration: none;
			margin-left: 10px;
			font-size: 14px;
		}

		/* Style for the container */
		.container {
			width: 90%;
			margin: 100px auto;
			font-size: 20px;
			line-height: 1.5;
            background-color:#f8f9fa;
			height:auto;
			
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
               
				if(!isset($_SESSION['name']))
				{
				   header('location:index.php');
				}
			?>
			<img src="images/<?php echo $_SESSION['id']; ?>.png" alt="Profile Image">
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






	<div class="container" style="padding-top:60px;">

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
		<div class="right-box" >
                        <?php            
                        // Connect to MySQL database
                        include '../model/connect.php';
                        // include 'connect.php';

                        // Query database for job posts
                        $poster_name=$_SESSION['name'].' '.$_SESSION['id'];
                        $sql = "SELECT * FROM job where poster_name='$poster_name'";
                        $result = $conn->query($sql);
                        echo '<h1 style="text-align:center;">Jobs</h1><p style="text-align:center;font-size:12px">All job offered by you</p><br>';
                        
                        // Loop through job posts and display as HTML
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<div class="job-post">';
                                echo '<div class="job-title">' . $row["title"] . '</div>';
                                echo '<div class="job-meta">' . $row["poster_name"] . ' | ' . $row["time"] . '</div>';
                                echo '<div class="job-description">' . $row["description"] . '</div><br>';
                                echo ' <div class="like-dislike">
                                
                                <button class="btn btn-danger"><a href="../controller/delete_job.php?deleteid='.$row["id"].'" style="color:white;text-decoration:none">Delete</a></button>
                            </div>';
                            echo '</div>';
                            }
                        } else {
                            echo "No job posts found.";
                        }

                        $conn->close();
                        ?>
      



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








	 