


<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="includes/eligibility.js"></script>



<head>
	<title>Check Eligibility</title>
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



		/* style for eligibility check			 */
h1 {
	text-align: center;
}

select, button {
	display: block;
	margin: 20px auto;
}

#question-container {
	display: none;
	width: 40%;
	margin:0 auto;
}

#question-container2 {
	display: none;
	width: 40%;
	margin:0 auto;
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

	<h1>Profession Eligibility Test</h1>
	<select id="profession">
		<option value="none">Select a profession</option>
		<option value="web developer">Web Developer</option>
		<option value="graphic designer">Graphic Designer</option>

	</select>
	<br>
	<button id="check-eligibility" onclick="checkEligibility()">Check Eligibility</button>




     <!-- question container -->
	<div id="question-container">
				<h4>Year of experience as a web developer?</h4>
				<form>
				<input type="radio" name="experience" value="0"> Fresh Graduate<br>
				<input type="radio" name="experience" value="1"> One year<br>
				<input type="radio" name="experience" value="2"> One--Three Year<br>
				<input type="radio" name="experience" value="3"> More than three year<br><br>
				
				</form>



				<h4>Select frontend technology stack you know?</h4>
				<form>
				<input type="radio" name="frontend" value="0"> None<br>
				<input type="radio" name="frontend" value="1"> HTML CSS<br>
				<input type="radio" name="frontend" value="2"> HTML CSS Javascript<br>
				<input type="radio" name="frontend" value="3"> HTML CSS JS JQuery<br>
				<input type="radio" name="frontend" value="4"> HTML CSS JS JQuery REACT/VUE/Angular <br><br>

				</form>



				<h4>Select backend technology stack you know?</h4>
				<form>
				<input type="radio" name="backend" value="0"> None<br>
				<input type="radio" name="backend" value="1"> PHP<br>
				<input type="radio" name="backend" value="2"> Familiar with one framework (Laravel,Django,Express js etc)<br>
				<input type="radio" name="backend" value="3"> Familiar with more than one framework<br>
			

				</form>


				<h4>Select Database you know?</h4>
				<form>
				<input type="radio" name="database" value="0"> None<br>
				<input type="radio" name="database" value="1"> Relational(MYSQL)<br>
				<input type="radio" name="database" value="2"> Non Relational (MongoDB)<br>
				<input type="radio" name="database" value="3"> Both Relational & Non Relational<br>
			

				</form>


				
				<h4>Select Version Control System you know?</h4>
				<form>
				<input type="radio" name="version" value="0"> None<br>
				<input type="radio" name="version" value="1"> Git & Github<br>
				<input type="radio" name="version" value="2"> Github and others<br>
				
			

				</form>
				
				<button type="button" onclick="calculatePoints()">Calculate</button>
                <br><br>
				<p id="points" style="text-align: center;"></p>

	</div>

















	<div id="question-container2">
		<h4>Year of experience as a Graphic designer ?</h4>
		<form>
		<input type="radio" name="experience" value="0"> Fresh Graduate<br>
		<input type="radio" name="experience" value="1"> One year<br>
		<input type="radio" name="experience" value="2"> One--Three Year<br>
		<input type="radio" name="experience" value="3"> More than three year<br><br>
		
		</form>



		<h4>Do you know about color theory and design principle?</h4>
		<form>
		<input type="radio" name="theory" value="0"> No<br>
		<input type="radio" name="theory" value="1"> Yes<br>
		

		</form>



		<h4>Select design tool you know?</h4>
		<form>
		<input type="radio" name="tool" value="0"> None<br>
		<input type="radio" name="tool" value="1"> Adobe illustrator<br>
		<input type="radio" name="tool" value="2"> Adobe photoshop<br>
		<input type="radio" name="tool" value="3"> Both illustrator & photoshop<br>
	

		</form>


		<h4>Familiar with UI/UX design?</h4>
		<form>
		<input type="radio" name="ui" value="0"> No<br>
		<input type="radio" name="ui" value="1"> Yes<br>
	
	

		</form>


		
		<h4>familiar with video editing and animation know?</h4>
		<form>
		<input type="radio" name="video" value="0"> No<br>
		<input type="radio" name="video" value="1"> Yes<br>
		
		
	

		</form>
		
		<button type="button" onclick="calculatePoints2()">Calculate</button>
		<br><br>
		<p id="points2" style="text-align: center;"></p>













                                    

				
				
    
	</div>



			</div>

    <br><br><br>
  
	<footer style="border-top: 1px solid orange; border-right: none; border-bottom: none; border-left: none;text-align: center;color:gray;font-size:12px;">
    <p style="margin: 0; padding: 5px;font-size:14px">Powered by <b>Career Assistant Team</b></p>
    <p style="margin: 0; padding: 5px;font-size:14px">Copyright © 2023 - 2023 Career Assistant Ltd. All rights reserved.</p>
	<br><br>

	
    
    </footer>










	</html>








	 