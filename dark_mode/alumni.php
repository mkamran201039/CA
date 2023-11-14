<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/header.css">

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


    

	 <style>
		 .container{
			padding-top:60px;
			background-color:#ffff;
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

                     
                        <!--  alumni search form  -->

						<form action="alumni.php?batch=" method="GET">
							<div class="search-box" style="margin-top:10%">
							<label for="cars"><h4><i style="color:gray">Select Batch: &nbsp &nbsp </i></h4></label>
                            <h3>
                                    <select name="batch" id="cars" style="width: 200px; /* Adjust the width as needed */
																		appearance: none;
																		padding: 9px;
																		font-size: 16px;
																		border: 1px solid #ccc;
																		border-radius: 5px;
																		
																		background-size: 20px;
																		margin: auto;
																		margin-left:5%;">
									  
                                        <option value="201">201</option>
                                        <option value="202">202</option>
                                        <option value="193">193</option>
                                        <option value="192">192</option>
                                    </select>
                             </h3>        
                             &nbsp &nbsp &nbsp &nbsp &nbsp  <br>
                            <h3>   
							<button type="submit">Load Alumni</button> </h3>
							</div>
						</form>

				<?php  
				 if(isset($_GET['batch']))
				 {  $batch=$_GET['batch'];
					echo '<br><br><br><h3 style="text-align:center;color:#fb980a;background-color:black;padding:10px;display:inline-block;border-radius:10px;font-size:16px">Batch: '.$batch.'</h3><br>';
				 }
				 $per_page_record = 3;  
				 $page=1;  
				 if(isset($_GET['batch']))
				    $batch=$_GET['batch'];
			     else
				    $batch=201;		
				 $result=false;
				

				?>

                <table class="table" style="padding-top:100px;text-align:center;margin-top:100px;font-size:15px">
                
                <?php
                include '../model/connect.php';
                
                if(isset($_GET['batch']))
                {      
					
					
                       

            
if (isset($_GET["page"])) {    
	$page  = $_GET["page"];    
}    
else {    
  $page=1;    
}    

$start_from = ($page-1) * $per_page_record;     

$sql = "SELECT * FROM student WHERE batch = '$batch' LIMIT $start_from, $per_page_record ";     






					
                    
                    // $sql="select * from student where batch=$batch";
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
                                <a href="visit_profile.php?visitid='.$id.'"  style="color:white;text-decoration:none;padding: 0px ;"><button type="submit" style="padding:10px;font-size:12px">Visit Profile</button></a>
                                
                                </td>
                                </tr>';
    
                            }
                       }
    
    
                       else
                        {
                            
                            echo "<img src='images/not_found.png' style='margin-left:44%;margin-top:80px' height='200px' width='200px'> ";
                         }
                   
                      



                         
                       

						
  
        
  


    
                    }

                }
                 
                
				


                ?>

                </tbody>
                </table>






            <br><br><br>
              
			<div class="pagination" style="margin-left:40%;">  
				
			<style>
				.pagination a:hover:not(.active) {   
                        background-color:#D3D3D3;   
                   } 
			</style>





				<?php   


               if($result){




				
				$query = "SELECT COUNT(*) FROM student  WHERE batch = '$batch' ";     
				$rs_result = mysqli_query($conn, $query);     
				$row = mysqli_fetch_row($rs_result);     
				$total_records = $row[0];   
				
				
				echo "</br>";     
				// Number of pages required.   
				$total_pages = ceil($total_records / $per_page_record);     
				$pagLink = "";       
			
				if($page>=2){   
					echo "<a   style=' font-weight:bold;   
					font-size:14px;   
					color: black;   
					padding: 8px 16px;   
					text-decoration: none;   
					border:1px solid black;  '   href='alumni.php?page=".($page-1)."&batch=".$batch."'>  Prev </a>";   
				}       
						
				for ($i=1; $i<=$total_pages; $i++) {   
				if ($i == $page) {   
					$pagLink .= "<a style='  font-weight:bold; 
					font-size:14px;   
					color: black;   
					padding: 8px 16px;   
					text-decoration: none;   
					border:1px solid black;background-color: orange; ' class = 'active' href='alumni.php?page="  
														.$i."&batch=".$batch."'>".$i." </a>";   
				}               
				else  {   
					$pagLink .= "<a style=' font-weight:bold;   
					font-size:14px;   
					color: black;   
					padding: 8px 16px;   
					text-decoration: none;   
					border:1px solid black;  '    href='alumni.php?page=".$i."&batch=".$batch."'>   
														".$i." </a>";     
				}   
				};     
				echo $pagLink;   
		
				if($page<$total_pages){   
					echo "<a style=' font-weight:bold;   
					font-size:14px;   
					color: black;   
					padding: 8px 16px;   
					text-decoration: none;   
					border:1px solid black;  '    href='alumni.php?page=".($page+1)."&batch=".$batch."'>  Next </a>";   
				}   
				
				
				
				
			}
				
				
				
				
				
				
				
				
				?>
				
			</div>







	                

					





				
    
	</div>

	<br><br><br>
  
  <footer style="border-top: 1px solid orange; border-right: none; border-bottom: none; border-left: none;text-align: center;color:gray;font-size:12px;">
  <p style="margin: 0; padding: 5px;font-size:14px">Powered by <b>Career Assistant Team</b></p>
  <p style="margin: 0; padding: 5px;font-size:14px">Copyright © 2023 - 2023 Career Assistant Ltd. All rights reserved.</p>
  <br><br>

  
  
  </footer>
















	</html>








	 