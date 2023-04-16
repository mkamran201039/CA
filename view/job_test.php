<!DOCTYPE html>
<html>
<head>
	<title>Job Post</title>
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
