<?php
	$content = $_POST["content"];

	$unique_id1 = rand(3333333,9999999);

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

	//delate after develop @vladan
	$likes = rand(1,400);
	$dislikes = rand(0,100);

	$sql = "INSERT INTO posts (content, unique_id, likes, dislikes, date, time) VALUES ('$content', '$unique_id1', '$likes', '$dislikes', CURDATE(), CURTIME())";

	if (mysqli_query($conn, $sql)) {
	    echo $unique_id1;

		$to = "moyatajna@yandex.ru";
		$subject = "New post on: Moyatajna.ru";
		$headers = "From: contact@moyatajna.ru";
		$txt = "Someone posted something on site www.moyatajna.ru\nConfession ID: " . $unique_id1 . "\nConfession content: " . $content;

		mail($to,$subject,$txt, $headers);
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
	
	
?>