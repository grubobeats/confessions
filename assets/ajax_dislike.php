<?php

if (isset($_POST["data"]) && strlen($_POST["data"]) > 0) {
	$post_id = $_POST["data"];

	$servername = "localhost";
	$username = "beatmark_vladan";
	$password = "Vladan063";
	$database = "beatmark_confessions";
	$conn = mysqli_connect($servername, $username, $password,$database);
	if (!$conn) {
	    die("Connection failed during the reason: " . mysqli_connect_error());
	} else {
		//echo "Connected successfully to database: " . $database;
	}

	$insert_likes = "UPDATE posts SET dislikes = dislikes + 1 WHERE id = '$post_id' ;";
	$read_likes = "SELECT dislikes FROM `posts` WHERE id = '$post_id';";

	if (mysqli_query($conn, $insert_likes)) {
	    //echo "New record created successfully ";
	} else {
	    //echo "Error: " . $insert_likes . "<br>" . mysqli_error($conn);
	}


	//echo "New record created successfully 2";
	$result = mysqli_query($conn, "SELECT dislikes FROM `posts` WHERE id = '$post_id';");
	$row = mysqli_fetch_array($result);
	echo $row["dislikes"];

	//echo "5";

}




?>