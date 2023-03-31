<?php
   include 'connect.php';
   if(isset($_POST["submit"])){
 
    $name=$_POST['name'];
    
    $university=$_POST['university'];
  
    $sql="INSERT INTO `basic`(`name`, `id`, `university`) VALUES ('$name','','$university')";
    $result=mysqli_query($conn,$sql);
       if($result){
      header("location:skill.php");
       }else{
        die(mysqli_error($conn));
       }
     

 }
//  <input type="submit" name="submit" onclick="location.href = 'skill.php'">

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educatoin</title>
</head>
<body>
    <div class="header">
        <h2 onclick="location.href = 'home1.html'">CAREER ASSISTANT</h2>
        
    </div>
    <hr>

    <div class="highlight">
    <span class="number" style="color: #fff; background-color: #15ac31;">1</span> <span class="name" style="color: #000;">Basic Information</span>
        <span class="number">2</span> <span class="name">SKILLS</span> 
        <span class="number">3</span> <span class="name">Interest</span> <span class="number">4</span> <span class="name">Contact</span>
        <span class="number"  >5</span> <span class="name">Job Status</span>  
    </div>

    <p style="text-align: center; margin-bottom: 0; color: #3983FA; font-size: 40px;">Basic Information</p>

    <div class="main">
        <form action="" method="POST">
            
            <div style="display: flex; gap: 20px;">
            
                <div style="display: flex; flex-direction: column;">
                    <label for="">Full Name</label><br>
                    <input style="width: 600px;
                    height: 30px;border-radius:3px" type="text" name="name" id="" required placeholder="Enter your name">
                    
                </div>
               
            </div>
            <div>
                <div style="display: flex; flex-direction: column; margin: 20px 0;">
                    <label for="">University Name</label><br>
                    <input type="text" style="width: 600px; height: 30px;border-radius:3px" name="university" id="" required placeholder="Enter your university name">
                </div>
            </div>
            

            
            </div>
            <div class="button" style="justify-content:center">
                <input type="submit" name="submit"  style="margin-left:45%;background:white;color:black;padding:10px;border-radius:5px">
            </div>
        </form>
    </div>
</body>

<style>
    body{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    .header{
        width: 80%;
        margin: auto;
    }
    .header h2{
        color: #3983FA;
        cursor: pointer;
    }
    hr{
        border:none;
        height: 20px;
        height: 50px;
        margin-top: 0;
        border-bottom: 1px solid #b6b6b6;
        box-shadow: 0 10px 10px -10px rgb(145, 144, 144);
        margin: -50px auto 10px; 
        padding: 0;
    }
    .main{
        width: 70%;
        margin : 50px auto;
    }
    .number{
        width: fit-content;
        padding: 3px;
        border: 1px solid rgb(153, 151, 151);
        border-radius: 10px;
    }
    .highlight{
        width: fit-content;
        margin: 20px auto;
        font-size: 14px;
        color: rgb(153, 151, 151);
    }
    .highlight .name{
        margin-right: 15px;
    }
    .main div{
        width: fit-content;
        margin: auto;
    }
    label{
        color: #3983FA;
    }
    .button p{
        margin-top: 40px;
        background: #D04141;
        color: #fff;
        padding: 10px 20px;
        cursor: pointer;
    }
</style>
</html>