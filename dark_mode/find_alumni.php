<?php



    if($_GET['id'] == '')
	{
		

	   header('location:home.php');
	}








?>







<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/header.css">


<head>
	<title>Find Alumni</title>
	<style>
		            body{
						background-color:white;
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






	<div class="container" style="padding-top:60px">

                     
                <table class="table" style="padding-top:100px;text-align:center">
                
                <?php
                include '../model/connect.php';
                $id=$_GET['id'];
			
                $sql="select * from student where student_id='$id'  OR name LIKE '%$id%' ";
                $result=mysqli_query($conn,$sql);
                if($result){
					$num_rows = mysqli_num_rows($result);
					if($num_rows>0)
					{    
						
						?>
							<thead>
								<tr>
								<th scope="col">Image</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Status</th>
								<th scope="col">Link</th>
								</tr>
							</thead>
							<tbody>

				   <?php


						while( $row=mysqli_fetch_assoc($result)){

							$id=$row['student_id'];
							$name=$row['name'];
							$email=$row['email'];
							$status=$row['current_status'];
						   
	
							echo '<tr>
							<th>'.'<img src="images/'.$id.'.png" height=40px width=40px style="border-radius:50%">'.'</th>
							<td>'.$name.'</td>
							<td>'.$email.'</td>
							<td>'.$status.'</td>
						  
							<td>
							<button ><a href="visit_profile.php?visitid='.$id.'"  style="color:white;text-decoration:none">Visit Profile</a></button>
							
							</td>
							</tr>';

					    }
				   }


				   else
					{
						
						echo "<img src='images/not_found.png' style='margin-left:42%' height='200px' width='200px'> ";
				 	}
               


                }
                
				


                ?>


                

                </tbody>
                </table>
                                    

				
				
    
	</div>







    <br><br><br>
  
	<footer style="border-top: 1px solid orange; border-right: none; border-bottom: none; border-left: none;text-align: center;color:gray;font-size:12px;">
    <p style="margin: 0; padding: 5px;font-size:14px">Powered by <b>Career Assistant Team</b></p>
    <p style="margin: 0; padding: 5px;font-size:14px">Copyright © 2023 - 2023 Career Assistant Ltd. All rights reserved.</p>
	<br><br>

	
    
    </footer>









	</html>








	 