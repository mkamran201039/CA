<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/slideshow.css">
<link rel="stylesheet" href="css/header.css">

<head>
	<title>Homepage</title>
	<style>
		body {
		background-color: #343541;
		color:white;
	   }

          	/* style for alumni search */
	.search-box {
		display: flex;
		align-items: center;
		justify-content: center;
		margin-top: 0px;
	}

	input[type="text"] {
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
		border-radius: 5px;
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
				<a href="../controller/destroy.php" class="logout-btn">Logout</a>
			</div>
		</div>
	</header>


     <!-- header part end here -->







 <div style="font-size: 15px; font-style: italic; color: gray;margin-bottom:18%;margin-bottom:0%;text-align:center;color:white" class="welcome_message">
    <p>
<span style="font-size:30px;"><b>W</b></span>elcome to Career Assistant, your one-stop destination for all your career needs! Whether you're a fresh graduate looking for job opportunities
 or an employer seeking talented professionals, we've got you covered.</p>
		<hr>
  </div>   


<!-- light mode button -->



  <style>
    .toggle-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 220px;
      height: 40px;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
    }

    .toggle-icon {
      font-size: 18px;
      margin-right: 10px;
	  
    }

    .toggle-text {
      font-size: 16px;
    }
  </style>
  
  <a href="../view/home.php" style="text-decoration:none;color:white">
     
		<div style="text-align:center;margin-left:42%;margin-top:50px;">

		<div class="toggle-container">
			<i class="fas fa-sun toggle-icon"></i>
			<span class="toggle-text">Enable Light Mode</span>
		</div>

		</div>


  </a>



  <!-- light mode button  end here -->
  






	<div class="container" style="padding-top:10px;background-color:#343541">

                     
                        <!--  alumni search form  -->

						<form action="find_alumni.php" method="GET">
							<div class="search-box">
							<input type="text" placeholder="Enter ID or Name" name="id" />
							<button type="submit">Find Alumni</button>
							</div>
						</form>

	                

					<div class="slideshow-container" >

						<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>
						<img src="images/image4.jpg" style="width:100%">
						<div class="text"></div>
						</div>

						<div class="mySlides fade">
						<div class="numbertext">2 / 3</div>
						<img src="images/image5.jpg" style="width:100%">
						<div class="text"></div>
						</div>

						<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
						<img src="images/image6.jpg" style="width:100%">
						<div class="text"></div>
						</div>

						<a class="prev" onclick="plusSlides(-1)">❮</a>
						<a class="next" onclick="plusSlides(1)">❯</a>

						</div>
						<br>

						<div style="text-align:center">
						<span class="dot" onclick="currentSlide(1)"></span> 
						<span class="dot" onclick="currentSlide(2)"></span> 
						<span class="dot" onclick="currentSlide(3)"></span> 
						</div>

						<script>
						let slideIndex = 1;
						showSlides(slideIndex);

						function plusSlides(n) {
						showSlides(slideIndex += n);
						}

						function currentSlide(n) {
						showSlides(slideIndex = n);
						}

						function showSlides(n) {
						let i;
						let slides = document.getElementsByClassName("mySlides");
						let dots = document.getElementsByClassName("dot");
						if (n > slides.length) {slideIndex = 1}    
						if (n < 1) {slideIndex = slides.length}
						for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";  
						}
						for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" active", "");
						}
						slides[slideIndex-1].style.display = "block";  
						dots[slideIndex-1].className += " active";
						}
						</script> 




<p style="font-size:13px;text-align:center">New to this platform? <a href="https://mkamran201039.github.io/mkdocs_career_assistant/" target="_blank" style="text-decoration:none">see documentation</a></p>

				
    
	</div>











<style>



table {
  width: 80%;
  border-collapse: collapse;
  margin: 0 auto;
}

td {
  padding: 10px;
  border: 1px solid #ccc;
}

.image-column {
  width: 30%;
}

.text-column {
  width: 70%;
}

</style>




<div style="font-size: 15px; color: gray;margin:18%;margin-top:12%;margin-bottom:0%;text-align:center">
    <p>
<span style="font-size:25px"><b>News/Events</b></span></p><br>
		
  </div>   





<table>
    <tr>
      <td class="image-column">
        <img src="images/get_together.jpg" alt="Image" width="350" height="250">
      </td>
      <td class="text-column">
        <h3>Get-Together Party 201 Batch !!!</h3>
        <p>Calling all CSE 201 batch alumni! Join us for an unforgettable get-together party that promises to 
			reignite old memories and forge new connections. Mark your calendars and join us as we celebrate our journey together.
			 Let's reminisce, laugh, and create lasting moments at the CSE 201 batch reunion party. See you there!</p>
      </td>
    </tr>


	
  </table>



  
<table style="border:0 px">
    <tr>
      
      <td class="text-column">
        <h3>Get-Together Party 201 Batch !!!</h3>
        <p>Calling all CSE 201 batch alumni! Join us for an unforgettable get-together party that promises to 
			reignite old memories and forge new connections. Mark your calendars and join us as we celebrate our journey together.
			 Let's reminisce, laugh, and create lasting moments at the CSE 201 batch reunion party. See you there!</p>
      </td>

	  <td class="image-column">
        <img src="images/get_together.jpg" alt="Image" width="350" height="250">
      </td>
    </tr>


	
  </table>











    <br><br><br>
  
	<footer style="border-top: 1px solid orange; border-right: none; border-bottom: none; border-left: none;text-align: center;color:gray;font-size:12px;">
    <p style="margin: 0; padding: 5px;font-size:14px">Powered by <b>Career Assistant Team</b></p>
    <p style="margin: 0; padding: 5px;font-size:14px">Copyright © 2023 - 2023 Career Assistant Ltd. All rights reserved.</p>
	<br><br>

	
    
    </footer>









	</html>








	 