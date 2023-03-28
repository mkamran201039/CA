<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
	<title>Alumni</title>
	<style>
                   body{
						background-color:white;
					}
                  

        /*  style for alumni search */
					.search-box {
					display: flex;
					align-items: center;
					justify-content: center;
					margin-top: 20px;
					}

					input[type="number"] {
					border: none;
					border: 2px solid #ddd;
					padding: 10px;
					font-size: 16px;
					margin-right: 10px;
					width: 30%;
					}

					button[type="submit"] {
					background-color: #4CAF50;
					color: white;
					border: none;
					padding: 10px 25px;
					font-size: 16px;
					cursor: pointer;
					border-radius:5px;
					}

					button[type="submit"]:hover {
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
            background-color:white;
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
			?>
			<img src="images/<?php echo $_SESSION['id']; ?>.png" alt="Profile Image">
			<div style="text-align:center">
				<p>

					<?php
                     
                    
                    
                      echo '<span style="font-size:14px;">'.$_SESSION['name'].'</span>';
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






	<div class="container" style="padding-top:20px">

                     
                        <!--  alumni search form  -->

						<form action="alumni.php?batch=" method="GET">
							<div class="search-box">
							<label for="cars"><h2>Select Batch: &nbsp &nbsp </h2></label>
                            <h3>
                                    <select name="batch" id="cars" style="background-color:white;width:100px;text-align:center">
                                        <option value="201">201</option>
                                        <option value="202">202</option>
                                        <option value="193">193</option>
                                        <option value="192">192</option>
                                    </select>
                             </h3>        
                             &nbsp &nbsp
                            <h3>       
							<button type="submit">Load Alumni</button> </h3>
							</div>
						</form>

                <table class="table" style="padding-top:100px;text-align:center;margin-top:100px">
                
                <?php
                include '../model/connect.php';
                
                if(isset($_GET['batch']))
                {     
                    $batch=$_GET['batch'];
                    $sql="select * from student where batch=$batch";
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
                                <h5><button type="submit" ><a href="visit_profile.php?visitid='.$id.'"  style="color:white;text-decoration:none;padding: 1px ;font-size:12px">Visit Profile</a></button></h5>
                                
                                </td>
                                </tr>';
    
                            }
                       }
    
    
                       else
                        {
                            
                            echo "<img src='images/not_found.png' style='margin-left:38%' height='300px' width='300px'> ";
                         }
                   
    
    
                    }

                }
                 
                
				


                ?>

                </tbody>
                </table>






	                

					





				
    
	</div>
















	</html>








	 