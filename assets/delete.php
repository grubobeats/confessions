<?php
	$unique_id = $_GET["id"];


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

	$sql = "DELETE FROM `posts` WHERE unique_id='$unique_id';";


	if (mysqli_query($conn, $sql)) {
	    
		$bot_token = "bot195524304:AAHPH7saj1qeKGleWZu9ePpyzgkg_jmu_HQ";
		$chat_id = "-141769525";
		$text = $txt . "Post delated.";

		$bot_url = "https://api.telegram.org/" . $bot_token . "/sendMessage?chat_id=" . $chat_id . "&text=*Post ID: " . $unique_id . " deleted*&parse_mode=Markdown";
		file_get_contents($bot_url);

	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
	
	
?>