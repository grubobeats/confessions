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
	$likes = 0;
	$dislikes = 0;

	$sql = "INSERT INTO posts (content, unique_id, likes, dislikes, date, time) VALUES ('$content', '$unique_id1', '$likes', '$dislikes', CURDATE(), CURTIME())";

	if (mysqli_query($conn, $sql)) {
	    echo $unique_id1;

		$to = "moyatajna@yandex.ru";
		$subject = "New post on: Moyatajna.ru";
		$headers = "From: contact@moyatajna.ru";
		$txt = "Someone posted something. Confession ID: " . $unique_id1 . " Confession content: " . $content;

		//mail($to,$subject,$txt, $headers);

		$bot_token = "bot195524304:AAHPH7saj1qeKGleWZu9ePpyzgkg_jmu_HQ";
		$chat_id = "-141769525";
		$text = $txt . " To delate post follow this link: www.example.com";

		$bot_url = "https://api.telegram.org/" . $bot_token . "/sendMessage?chat_id=" . $chat_id . "&text=`New confession ID: " . $unique_id1 . "` ```---``` Content: ". $content ."```---```To delate post [click here](http://www.moyatajna.ru/assets/delete.php?id=" . $unique_id1 .") &parse_mode=Markdown&disable_web_page_preview=true";
		file_get_contents($bot_url);

		echo "<script>window.close();</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
	
	
?>