<?php
require "/assets/config.php";
// Insert Header
include "header.php";


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
						<div class="panel panel-default">
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

<?php include "footer.php"; ?>