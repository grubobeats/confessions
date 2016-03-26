<?php
require "assets/config.php";
// Insert Header
include "header.php";


if (isset($_POST["sendmail"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$to = "vladan.paunovic.bg@gmail.com";
	$subject = "Message from: Moyatajna.ru";
	$headers = "From: contact@moyatajna.ru";
	$txt = "You have new message from site www.moyatajna.ru\nContact name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;

	mail($to,$subject,$txt, $headers);

	$success =  "<p class='text-success'>Your message sent successfully.</p>";
}


?>
			
				<div class="row">
					<div class="col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="index.php">Популярные признания</a></li>
						  <li class="active">Добавьте ваше признание</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-success wow fadeIn" data-wow-duration="3s">
						  	<div class="panel-heading">
						    	<h3 class="panel-title">Contact</h3>
						  	</div>
							<div class="panel-body">
							  	 <div class="col-sm-4">
							  	 	<legend>Info:</legend>
								    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								    tempor incididunt ut labore et dolore magna aliqua.
								</div>
							  	<div class="col-sm-8">
							  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
								    <legend>Your message:</legend>
		
									<div class="form-group">
										<label>Your name:</label>
										<input name="name" id="name" class="form-control" rows="3" required="required"></input>
									</div>
									<div class="form-group">
										<label>Your e-mail:</label>
										<input name="email" id="email" class="form-control" rows="3" required="required"></input>
									</div>
									<div class="form-group">
										<label>Message:</label>
										<textarea name="message" id="message" class="form-control" rows="3" required="required"></textarea>
									</div>
									<button type="submit" name="sendmail" class="btn btn-primary pull-right">Ok, contact us</button>
									<?php $success ?>
							    </form>
							    </div> 
							</div>
						</div>
					</div>
				</div>


<?php include "footer.php"; ?>