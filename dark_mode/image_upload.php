<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "cas");

// Check for database connection errors

// Start the session
session_start();

// Get the session ID
$sessionID = $_SESSION['id'];
// $sessionID = "011201039";

// Get the uploaded image details
$imageName = $_FILES["image"]["name"];
$imageTmp = $_FILES["image"]["tmp_name"];

// Generate a unique file name using session ID
$fileName = "img_".$sessionID;
$fileName2 = $sessionID.".png";

// Save the uploaded image to the "profile_pics" folder
$destination = "images/" . $fileName2;
move_uploaded_file($imageTmp, $destination);

// Save the session ID and image file name to the database
$sql ="UPDATE student SET image = '$fileName' WHERE student_id = $sessionID";
$conn->query($sql);

// Close the database connection

// Redirect the user back to the profile page or any other desired page
header("Location: profile.php");
exit();
?>
