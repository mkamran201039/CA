
<script>

  
</script>	   

<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/slideshow.css">
<link rel="stylesheet" href="css/visit_profile.css">
<link rel="stylesheet" href="css/header.css">
<script src="../controller/api_call.js"></script>

<head>
	<title>Homepage</title>
	<style>
                 
                 
                 
                 body{
						background-color:#f8f9fa;
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
					padding: 10px 20px;
					font-size: 16px;
					cursor: pointer;
					border-radius:5px;
					}

					button[type="submit"]:hover {
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
                     
                    
                    
                      echo '<span style="font-size:14px;">'.$_SESSION['name'].'</span>';
					  echo "<br>";
					  $id=$_SESSION['id'];
					  echo '<i style="color:black;font-size:15px;font-family:calibri ;">'.
					        $id.' </i> ';
                      //session_destroy();
                    
      

                   ?>
				</p>
				<br>
				<a href="../controller/destroy.php" class="logout-btn">Logout</a>
			</div>
		</div>
	</header>


     <!-- header part end here -->






	<div class="container" style="padding-top:20px">

                     
                   
                       <?php 
                            $id=$_GET['visitid'];
                         
                       ?>

<div class="container2">
        <div class="profile-image">
            <?php
                 echo '<img src="images/'.$id.'.png" >'
            ?>
        
        </div>
        <div class="header2">
            <ul> <script>
				    var visitid=<?php echo $_GET['visitid']; ?>;
				 </script>
			    <li><a href="javascript:void(0)"  onclick="func1('<?php echo $id ?>')">Academic Info</a></li>

                <li><a href="javascript:void(0)" onclick="func2('<?php echo $id ?>')">Achievements</a></li>
                <li><a href="javascript:void(0)"  onclick="func3('<?php echo $id ?>')">Work Experience</a></li>
                <li><a href="javascript:void(0)"  onclick="func4('<?php echo $id ?>')" >Helping Area</a></li>
                <li   style="border:0px" onclick="func5('<?php echo $id ?>')"><a href="javascript:void(0)">Contact Info</a></li>
            </ul>
        </div>
        <div id="content" style="text-align:center;background-color:#C5C5C5;padding:20px;font-size:14px">
            <br><br>
            <h3 id="personal-info">Click above & get info here</h3>
           
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








	 