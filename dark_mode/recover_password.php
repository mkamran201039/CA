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
    $password = $_POST['password'];
    $c_password = $_POST['confirm_password'];
    $email="";

    if($password!=$c_password)
    {
       header('location:recover_password.php');
    }
    else
            {   
             
              $sql="select * from student where student_id='$id'  ";

              $result=mysqli_query($conn,$sql);
       
              if($result)
              {
                    $num=mysqli_num_rows($result);
                
                    if($num>0)
                    {
                        while($row = $result->fetch_assoc()) {
                          $email=$row['email'];
                          
                            session_start();
                            $_SESSION['password']=$password;

                            
                          }
                      
                        
                    }


                    else
                    {
                             
                      $sql="select * from employer where id='$id'  ";

                      $result=mysqli_query($conn,$sql);
               
                      if($result)
                      {
                                
                        $num=mysqli_num_rows($result);
                
                          if($num>0)
                          {
                              while($row = $result->fetch_assoc()) {
                                $email=$row['email'];
                                
                                  session_start();
                                  $_SESSION['password']=$password;

                                }
                            
                              
                          }
                      }
                          

                    }
          
                    
              }

              
            }








              if($email != "")
              {
                    
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
                $otp=rand(1111,9999);
                $mail->Body = "<h1>Welcome to UIU Career Assistant System</h1></br><p>Your OTP for Changing Passwword: <b>".$otp." </b></p>";
                $mail->addAddress($email);
                $id=$_POST['id'];
                $_SESSION['otp']=$otp;
                $_SESSION['id']=$id;
                
              
                if ( $mail->send() ) {
                    $issent=1;
                    header('location:change_password.php');

                }else{
                  echo "Message could not be sent. Mailer Error: ";
                }
              
                $mail->smtpClose();
              }

              else
              {
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
  <title>Update Password</title>
 







</head>

<body>
  <div class="container">



    <div class="left-box">
      <img src="images/CAS_logo.PNG" height="130px" width="90%">
      <p style="font-style: italic;font-size: 16px;margin-top: 0px;">Welcome to our Career Assistant platform!
        We are excited to connect you with fellow alumni and provide resources to help you further your career. Our
        website offers a variety of tools to help you stay connected with our alumni, including a directory of alumni,
        job listings, and career development resources. Whether you're looking to network, find a job, or advance in
        your current career,
        we're here to help. So why wait? Just login using University email and start taking advantage of all the
        benefits of being a part of our alumni community!</p>
    </div>









    <div class="right-box">
      <img class="logo" src="images/uiu_logo.png" alt="Logo" width="120px" height="100px">
      <form  style="max-width:500px;margin:auto" method="POST">

        <div class="input-container">
          <i class="fa fa-user icon"></i>
          <input class="input-field" type="text" placeholder="Enter ID" name="id">
        </div>


        <div class="input-container">
          <i class="fa fa-key icon"></i>
          <input class="input-field" type="password" placeholder="New Password" name="password">
        </div>



        <div class="input-container">
          <i class="fa fa-key icon"></i>
          <input class="input-field" type="password" placeholder="Confirm Password" name="confirm_password">
        </div>




        <button type="submit" class="btn" name="submit">Update Password</button>
      </form>





      <br><br>
      <a href="index.php">Go back to log in page</a>

      <br>
      <?php
      
       if($invalid==1)
         echo "<p style='color:red;background-color:#f4d6d2;padding:12px;'> Invalid ID !!! Please try again</p> ";
         
       if($issent==1)
         echo "<p style='color:green;background-color:#83f28f;padding:12px;'> Login Password has been sent to your University mail</p> ";
        


      ?>
      


    </div>




  </div>


  


 



 















</body>

</html>