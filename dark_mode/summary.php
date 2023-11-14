<?php
                include '../model/connect.php';
              
                $sql="select * from student ";
                $result=mysqli_query($conn,$sql);
                if($result){
                    $num_rows = mysqli_num_rows($result);

					$a=0;
					$b=0;
					$c=0;
					$d=0;
					$e=0;
                   


					while( $row=mysqli_fetch_assoc($result)){

						$cgpa=$row['cgpa'];

						if($cgpa>3.49)
						   $a++;
						else if($cgpa>2.99)
						   $b++; 
						else if($cgpa>2.49)
						   $c++; 
						else if($cgpa>1.99)
						   $d++;   
						else 
						   $e++;        
						
		
					}

		
					
					
				}
						
?>









<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/header.css">


<head>
	<title>Summary</title>
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

                


				
									
								<canvas id="myChart" style="width:50%;max-width:600px;margin:0 auto">here</canvas>

								<script>

								var xValues = [">=3.5", "3.0--3.49", "2.5--2.99", "2.0--2.49", "<2"];
								var yValues = [<?php echo $a; ?>, <?php echo $b; ?>, <?php echo $c; ?>, <?php echo $d; ?>, <?php echo $e; ?>];
								var barColors = [
								"#b91d47",
								"#00aba9",
								"#2b5797",
								"#e8c3b9",
								"#1e7145"
								];

								new Chart("myChart", {
								type: "pie",
								data: {
									labels: xValues,
									datasets: [{
									backgroundColor: barColors,
									data: yValues
									}]
								},
								options: {
									title: {
									display: true,
									text: "CGPA Chart of our Alumni"
									}
								}
								});
								</script>

			 



                                    

				
				
    
	</div>






   
	<div class="accordion accordion-flush" id="accordionFlushExample" style="width: 80%;margin: 0 auto;margin-bottom: 80px;">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Where to start
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Accordion Item
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Accordion Item 
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
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








	 