<?php

	$comment = $_POST["comment"];
	$post_id = $_POST["unique_id"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "confessions";
	$conn = mysqli_connect($servername, $username, $password,$database);
	if (!$conn) {
	    die("Connection failed during the reason: " . mysqli_connect_error());
	} else {
		//echo "Connected successfully to database: " . $database;
	}

	$insert_comments = "INSERT INTO comments (comment, unique_post_id, date, time) VALUES ('$comment', '$post_id', CURDATE(), CURTIME());";
	$read_comments = "SELECT * FROM `comments` WHERE unique_post_id = '$post_id' ORDER BY `id` DESC;";

	if (mysqli_query($conn, $insert_comments)) {
	    //echo "New record created successfully ";
	} else {
	    echo "Error: " . $insert_comments . "<br>" . mysqli_error($conn);
	}


	//echo "New record created successfully 2";
	$result = mysqli_query($conn, $read_comments);
	//$row = mysqli_fetch_array($result);

	while ($row = mysqli_fetch_array($result)) {
		echo "<tr><td width='80%'>" . $row["comment"] . "</td><td  align='center'>" . $row["date"] . "<br>" . $row["time"] . "</td></td/>";
	}

	
?>