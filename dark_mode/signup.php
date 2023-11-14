<?php

   
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
    $issent=0;
    $invalid=0;




	if(isset($_POST['submit']))
	{
    include '../model/connect.php';
    $id=$_POST['id'];
    

    $sql="select * from student where student_id='$id' ";

    $result=mysqli_query($conn,$sql);

    if($result)
    {   
          $num=mysqli_num_rows($result);
          $email;
          $password;
          if($num>0)
          {
           while($row = $result->fetch_assoc()) {
                    $email=$row['email'];
                    $password=$row['password'];

                    $mail = new PHPMailer();
                    $mail->isSMTP();
                    $mail->Host = "smtp.gmail.com";
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = "tls";
                    $mail->Port = "587";
                    $mail->Username = "careerassistent@gmail.com";
                    $mail->Password = "hodhfpjzygyzmhcv";
                    $mail->Subject = "Login Credentials for UIU CAREER ASSISTANT System";
                    $mail->setFrom('mkamran201039@bscse.uiu.ac.bd');
                    $mail->isHTML(true);
                    // $mail->addAttachment('img/attachment.png');
                    // $otp=rand(1111,9999);
                    $mail->Body = "<h1>Welcome to UIU Career Assistant System</h1></br><p>Your Password for Log in: <b>".$password." </b></p>";
                    $mail->addAddress($email);
                  
                    if ( $mail->send() ) {
                        $issent=1;

                    }else{
                      echo "Message could not be sent. Mailer Error: ";
                    }
                  
                    $mail->smtpClose();
                              
                    }

             
           
          }




          else
            $invalid=1;
        }	


	}



?>









<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="icon" type="image/x-icon" href="images/faviconn.png"> -->
  <link rel="icon" href="https://uiu.ac.bd/wp-content/uploads/2015/10/favicon.png" />
  <link rel="stylesheet" href="css/login_page.css">
  <title>Employer Signup</title>
 


  <style>
    /* Add some basic styling to the form */
    form {
      max-width: 300px;
      margin: 0 auto;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 20px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    
    .google-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 10px 20px;
      background-color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    /* CSS for the button text */
    .google-button-text {
      margin-left: 10px;
      color: #000000;
      font-size: 16px;
      font-weight: bold;
    }
    
    /* CSS for the Google logo */
    .google-logo {
      width: 18px;
      height: 18px;
    }


  </style>











</head>

<body>
  <div class="container">











    <div class="right-box" style="margin: 0 auto;margin-top: 0px;border-radius:5px">
      <img class="logo" src="images/uiu_logo.png" alt="Logo" width="120px" height="95px">
      

  <form action="register.php" method="POST">
    <h2 style="color:gray"> Sign-up</h2>
   
    <input type="text" id="employerName" name="employerName" required placeholder=" Name"> <br>

    
    <input type="email" id="email" name="email" required placeholder="Email">


    <input type="text" id="address" name="address" required placeholder="Address">


    <input type="password" id="password" name="password" required  placeholder="Password">

 
    <input type="password" id="confirmPassword" name="confirmPassword" required placeholder="Confirm Password">

    <input type="submit" value="Register">
  </form>

 <br>
  <a href="#">
    <div class="google-button">
      <img class="google-logo" src="images/google_logo.webp" alt="Google Logo">
      <span class="google-button-text">Sign up with Google</span>
    </div>
  </a>





      <br><br>
      <a href="index.php">Go back to log in page</a>

      <br>
      <?php
      
       if($invalid==1)
         echo "<p style='color:red;background-color:#f4d6d2;padding:12px;'> Invalid Student ID !!! Please try again</p> ";
         
       if($issent==1)
         echo "<p style='color:green;background-color:#83f28f;padding:12px;'> Login Password has been sent to your University mail</p> ";
        


      ?>
      


    </div>




  </div>


  


 



 







</body>

</html>