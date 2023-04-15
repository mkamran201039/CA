<?php

include '../model/connect.php';


if(isset($_POST['post_job']))
{
    $poster_name=$_GET['poster_name'];
    $title=$_POST['job_title'];
    $job_description=$_POST['job_description'];
    $current_date_time = date('Y-m-d H:i:s');
    
    echo $poster_name;
    // echo $title;
    // echo $job_description;

    $sql="insert into job (poster_name,title,description,time) values( '$poster_name','$title','$job_description','$current_date_time')";
  
    $result=mysqli_query($conn,$sql);

    echo "ok";

    if($result){
        echo " <script> 
         alert(' Created successfully ');
        </script>    ";

        header('location:../view/job_post.php');
    }
}




mysqli_close($conn);

?>
