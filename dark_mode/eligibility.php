


<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="includes/eligibility.js"></script>
<link rel="stylesheet" href="css/header.css">




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
			padding-top:200px;
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
    
		<div style="font-size: 18px; font-style: italic; color: gray;margin-bottom:18%;margin-top:5%;margin-bottom:0%;text-align:center">
			<p>"The Professional Eligibility Test on our website allows you to assess your skills and knowledge in various 
				professional fields such as web development, graphic design, AI engineering, cloud engineering, network engineering etc."</p>
				<hr>
		</div>   
          

		<style>
			.image-box{
			
				display: flex; 
				justify-content: center; 
				align-items: center; height: auto;
				margin-top:5%
			}
			.image-box img {
				
				width: 80%;
				height: 500px;
			}
			@media only screen and (max-width: 880px){
				.image-box img {
				
				width: 90%;
				height: 300px;
			  }
			}

	    </style>		

		<div class="image-box">
			<img src="images/profession.jpg" alt="Image"  />
		</div> <br><br>





	<h1><i style="color:gray;font-size:30px">Professional Eligibility Test</i></h1><hr><br><br>
	<select id="profession" style="width: 300px; /* Adjust the width as needed */
    appearance: none;
    padding: 7px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: url('dropdown-arrow.png') no-repeat right center; /* Replace 'dropdown-arrow.png' with your own image */
    background-size: 20px;
    margin:0 auto;
    ">
		<option value="none">Select a profession</option>
		<option value="web developer">Web Developer</option>
		<option value="graphic designer">Graphic Designer</option>

	</select>
	<br>
	<button id="check-eligibility" onclick="checkEligibility()">Check Eligibility</button>




     <!-- question container -->
	<div id="question-container" style="font-size:12px">
				<h5>Year of experience as a web developer?</h5>
				<form>
				<input type="radio" name="experience" value="0"> Fresh Graduate<br>
				<input type="radio" name="experience" value="1"> One year<br>
				<input type="radio" name="experience" value="2"> One--Three Year<br>
				<input type="radio" name="experience" value="3"> More than three year<br><br>
				
				</form>



				<h5>Select frontend technology stack you know?</h5>
				<form>
				<input type="radio" name="frontend" value="0"> None<br>
				<input type="radio" name="frontend" value="1"> HTML CSS<br>
				<input type="radio" name="frontend" value="2"> HTML CSS Javascript<br>
				<input type="radio" name="frontend" value="3"> HTML CSS JS JQuery<br>
				<input type="radio" name="frontend" value="4"> HTML CSS JS JQuery REACT/VUE/Angular <br><br>

				</form>



				<h5>Select backend technology stack you know?</h5>
				<form>
				<input type="radio" name="backend" value="0"> None<br>
				<input type="radio" name="backend" value="1"> PHP<br>
				<input type="radio" name="backend" value="2"> Familiar with one framework (Laravel,Django,Express js etc)<br>
				<input type="radio" name="backend" value="3"> Familiar with more than one framework<br>
			

				</form>


				<h5>Select Database you know?</h5>
				<form>
				<input type="radio" name="database" value="0"> None<br>
				<input type="radio" name="database" value="1"> Relational(MYSQL)<br>
				<input type="radio" name="database" value="2"> Non Relational (MongoDB)<br>
				<input type="radio" name="database" value="3"> Both Relational & Non Relational<br>
			

				</form>


				
				<h5>Select Version Control System you know?</h5>
				<form>
				<input type="radio" name="version" value="0"> None<br>
				<input type="radio" name="version" value="1"> Git & Github<br>
				<input type="radio" name="version" value="2"> Github and others<br>
				
			

				</form>
				
				<button type="button" onclick="calculatePoints()">Calculate</button>
                <br><br>
				<p id="points" style="text-align: center;"></p>

	</div>

















	<div id="question-container2" style="font-size:12px">
		<h5>Year of experience as a Graphic designer ?</h5>
		<form>
		<input type="radio" name="experience" value="0"> Fresh Graduate<br>
		<input type="radio" name="experience" value="1"> One year<br>
		<input type="radio" name="experience" value="2"> One--Three Year<br>
		<input type="radio" name="experience" value="3"> More than three year<br><br>
		
		</form>



		<h5>Do you know about color theory and design principle?</h5>
		<form>
		<input type="radio" name="theory" value="0"> No<br>
		<input type="radio" name="theory" value="1"> Yes<br>
		

		</form>



		<h5>Select design tool you know?</h5>
		<form>
		<input type="radio" name="tool" value="0"> None<br>
		<input type="radio" name="tool" value="1"> Adobe illustrator<br>
		<input type="radio" name="tool" value="2"> Adobe photoshop<br>
		<input type="radio" name="tool" value="3"> Both illustrator & photoshop<br>
	

		</form>


		<h5>Familiar with UI/UX design?</h5>
		<form>
		<input type="radio" name="ui" value="0"> No<br>
		<input type="radio" name="ui" value="1"> Yes<br>
	
	

		</form>


		
		<h5>familiar with video editing and animation know?</h5>
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








	 