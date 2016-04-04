<?php


$servername = "localhost";
$username = "beatmark_vladan";
$password = "Vladan063";
$dbname = "beatmark_confessions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$num1 = rand(5,50);
$num2 = rand(0,10);


$add_numbers = "UPDATE `posts` SET likes = likes + " . $num1 . ", dislikes = dislikes + " . $num2 . " WHERE `date` > DATE_SUB(NOW(), INTERVAL 7 DAY);";

mysqli_query($conn, $add_numbers);

//echo $add_numbers;



?>