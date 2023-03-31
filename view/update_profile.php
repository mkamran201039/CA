


<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/profile_page.css">



<script>
   function showMessage() {
              alert("Profile Updated successfully");
     }

</script>


<head>
	<title>Update Profile</title>
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
				<a href="#">Post Job </a>
				<a href="send_feedback.php">Send Feedback</a>
				
			</div>
		</div>
		<div class="right-box" >
						<?php
						include ('includes/connect.php');
				         $id=$_SESSION['id'];
						// Fetch profile details from database
						$sql = "SELECT * FROM student where student_id=$id";
						$result = mysqli_query($conn, $sql);
				
						// Loop through each row in the result and display the details
						while ($row = mysqli_fetch_assoc($result)) {
						
						  ?>

                            <form method="POST" action="../controller/profile_info_save.php?updateid=<?php echo $id ?>">
                            <div class="form-group">
                              <label for="exampleInputEmail1"><i><b>Academic Achievements</b></i></label><br>
                              <textarea id="m_feedback"  rows="5" cols="90"  name='achievements' ><?php echo $row["achievements"]  ?></textarea><br>
                          
                              
                          
                            </div> 
                          
                          
                          


                            <div class="form-group">
                              <label for="exampleInputEmail1"><i><b>Field of Interest</b></i></label><br>
                              <textarea padding="5px" id="m_feedback"  rows="5" cols="90"  name='interest' ><?php echo $row["interest"]  ?></textarea><br>
                          
                              
                          
                            </div>



                          
                            <div class="form-group">
                              <label for="exampleInputEmail1"><i><b>Current Status</b></i></label><br>
                              <textarea padding='5px' id="m_feedback" name="current_status" rows="2" cols="90"  name='current_status' ><?php echo $row["current_status"]  ?></textarea><br>
                          
                              
                          
                            </div>


                            <div class="form-group">
                              <label for="exampleInputEmail1"><i><b>Helping area</b></i></label><br>
                              <textarea padding="5px" id="m_feedback" rows="5" cols="90"  name='helping_area' > <?php echo $row["helping_area"]  ?></textarea><br>
                          
                              
                          
                            </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1"><i><b>Contact Info</b></i></label><br>
                              <textarea padding="5px" id="m_feedback" rows="5" cols="90"  name='contact_info' > <?php echo $row["contact_info"]  ?></textarea><br>
                          
                              
                          
                            </div>

                            <label>
                                <b>Show CGPA & Academic Achievements: </b><br><br>
                                <?php 
                                if($row["show_cgpa"]==1)
                                echo '<input type="checkbox" name="toggleValue" value="1" checked style="width:30px;height:30px">';
                                else
                                echo '<input type="checkbox" name="toggleValue" value="1" style="width:30px;height:30px">';


                                ?>
                            </label>

                            <br><br><br>
                          
                           
                            <button type="submit"  name="submit" style="width:20%" onclick="showMessage()">Update</button>
                          </form>
						
						<?php
						
						}
				
						// Close the database connection
						mysqli_close($conn);
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








	 