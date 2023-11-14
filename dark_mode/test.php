

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $confirmOtp = $_POST["confirmOtp"];
  session_start();
  $password=$_SESSION['password'];
  $otp=$_SESSION['otp'];
  $id= $_SESSION['id'];

  // Perform any desired operations with the form data
  // ...

  // Print the values for testing purposes
//   echo "Confirm OTP: " . $confirmOtp . "<br>";
//   echo "OTP: " . $otp . "<br>";
//   echo "ID: " . $id . "<br>";
//   echo "Password: " . $password . "<br>";

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);



  


          if($confirmOtp==$otp)
              {
              
                      include '../model/connect.php';


                      $sql="UPDATE student SET password = '$hashedPassword' WHERE student_id = '$id'; ";
                      $result=mysqli_query($conn,$sql);
                  
                  
                  
                  
                      if($result)
                      {   
                              
                  
                        //   echo "success";
                      
                  
                  
                      }
                  
                      
                      $sql="UPDATE employer SET password = '$hashedPassword' WHERE id = '$id'; ";
                      $result=mysqli_query($conn,$sql);
                  
                  
                  
                  
                      if($result)
                      {   
                              
                  
                        // echo "success";
                      
                  
                  
                      }
          
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
      padding: 5px;
      margin-bottom: 10px;
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
  </style>











</head>

<body>
  <div class="container">











    <div class="right-box" style="margin: 0 auto;border-radius:5px">
      <img class="logo" src="images/uiu_logo.png" alt="Logo" width="120px" height="100px">
      

     <?php 


if($confirmOtp!=$otp)
{
    echo "<p style='color:red;background-color:#f4d6d2;padding:12px;'> Invalid OTP , Email Verification Failed !!! Please try again</p> ";

    echo "<br><br><a href='recover_password.php'>Go back to update password page</a>";
}
else
{
    echo "<p style='color:green;background-color:#83f28f;padding:12px;'> Congratulations !!! Password Updated Successfully
        <br> <b></p> ";
     

    echo "<br><br><a href='index.php'>Go back to login page</a>";
}


     ?>





      <br><br>


      <br>
   
      


    </div>




  </div>


  


 



 







</body>

</html>