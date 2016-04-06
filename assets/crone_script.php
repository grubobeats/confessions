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


$num1 = rand(5,80);
$num2 = rand(0,15);


$add_numbers = "UPDATE `posts` SET likes = likes + " . $num1 . ", dislikes = dislikes + " . $num2 . " WHERE `date` > DATE_SUB(NOW(), INTERVAL 7 DAY);";

mysqli_query($conn, $add_numbers);

//echo $add_numbers;

$bot_token = "bot195524304:AAHPH7saj1qeKGleWZu9ePpyzgkg_jmu_HQ";
$chat_id = "-141769525";
$text = $txt . " You have share on ";

$bot_url = "https://api.telegram.org/" . $bot_token . "/sendMessage?chat_id=" . $chat_id . "&text=Adedd " . $num1 . " likes and " . $num2 . " dislikes to all posts.&parse_mode=Markdown&disable_web_page_preview=true";
file_get_contents($bot_url);


?>