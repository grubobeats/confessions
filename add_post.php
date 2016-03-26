<?php
require "/assets/config.php";
// Insert Header
include "header.php";

if (isset($_POST["submit_content"])) {
	$content = $_POST["content"];
	$unique_id = rand(3399999999999999,9999999999999999);


	//delate after develop @vladan
	$likes = rand(1,400);
	$dislikes = rand(0,100);

	$sql = "INSERT INTO posts (content, unique_id, likes, dislikes, date, time) VALUES ('$content', '$unique_id', '$likes', '$dislikes', CURDATE(), CURTIME())";

	if (mysqli_query($conn, $sql)) {
	    //echo "New record created successfully";
	    header('Location: index.php');
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}




?>
			<form method = "post" action = "add_post.php">
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
						<div class="panel panel-success wow fadeIn" data-wow-duration="2s">
						  	<div class="panel-heading">
						    	<h3 class="panel-title">Добавьте ваше признание</h3>
						  	</div>
							<div class="panel-body">
							  	 <div class="col-sm-4">
							  	 	<legend>Защита личных данных:</legend>
								    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								    tempor incididunt ut labore et dolore magna aliqua.
								</div>
							  	<div class="col-sm-8">
								    <legend>Признание:</legend>
		
									<div class="form-group">
										<textarea name="content" id="inputContent" class="form-control" rows="3" required="required"></textarea>
									</div>
									<button type="submit" name="submit_content" class="btn btn-primary pull-right">Добавить признание</button>
							    </div> 
							</div>
						</div>
					</div>
				</div>
			</form>

<?php include "footer.php"; ?>