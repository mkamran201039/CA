<!DOCTYPE html>
<html>
<head>
	<title>Job Post</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f7f7f7;
			padding: 20px;
		}
		.job-post {
			background-color: #fff;
			padding: 20px;
			margin-bottom: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0,0,0,0.1);
		}
		.job-title {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.job-meta {
			font-size: 14px;
			color: #666;
			margin-bottom: 10px;
		}
		.job-description {
			font-size: 16px;
			line-height: 1.5;
		}
	</style>
</head>
<body>

<?php
// Connect to MySQL database
// include '../model/connect.php';
include 'connect.php';

// Query database for job posts
$sql = "SELECT * FROM job";
$result = $conn->query($sql);

// Loop through job posts and display as HTML
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo '<div class="job-post">';
		echo '<div class="job-title">' . $row["title"] . '</div>';
		echo '<div class="job-meta">' . $row["poster_name"] . ' | ' . $row["time"] . '</div>';
		echo '<div class="job-description">' . $row["description"] . '</div>';
		echo '</div>';
	}
} else {
	echo "No job posts found.";
}

$conn->close();
?>

</body>
</html>
