<?php
require "/assets/config.php";


if (isset($_POST["submit_content"])) {
	$content = $_POST["content"];
	echo $content;

	$sql = "INSERT INTO posts (content) VALUES ('$content')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}




?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Confessions: Add your confession</title>
</head>
<body>

<br>
<div class="container-fluid">

	<form action="add_post.php" method="POST" role="form">
		
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				
				<div class="row">
					<div class="col-sm-12">
						<div class="jumbotron">
						  <h1>Feel free.</h1>
						  <p>We are not storing any data from your computer. We respect you privacy more than all others. So fell free to post anything.</p>
						  </div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="index.php">Popular</a></li>
						  <li class="active">Add your confession</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default">
						  	<div class="panel-heading">
						    	<h3 class="panel-title">Add your confession</h3>
						  	</div>
							<div class="panel-body">
							  	 <div class="col-sm-4">
							  	 	<legend>Priacy protection:</legend>
								    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								    tempor incididunt ut labore et dolore magna aliqua.
								</div>
							  	<div class="col-sm-8">
								    <legend>Confession:</legend>
		
									<div class="form-group">
										<textarea name="content" id="inputContent" class="form-control" rows="3" required="required"></textarea>
									</div>
								
									<div class="col-sm-12 text-right">
										<button type="submit" name="submit_content" class="btn btn-primary">Submit confession</button>
									</div>
							    </div> 
							</div>
						</div>
						<p class="text-muted text-right" style="margin-bottom: 55px !important;">Confessions Inc 2016</p>
					</div>
				</div>
			</div>
	</form>
	</div>





</body>
</html>