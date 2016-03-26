<?php
require "assets/config.php";
// Insert Header
include "header.php";

$unique_id = $_GET["pid"];

?>

				<div class="row">
					<div class="col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="index.php">Популярные признания</a></li>
						  <li class="active">Sucess</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="well well-lg">
							<h1>Success!</h1>
							<p>You just posted your confession. You won't get any email or notification about this because this is strictly confident and we are not taking any of user info.</p>
							<p>If you want to find your confession later and see comments, just type confession ID number in search bar and it will be shown for you.</p>
							<h4>ID: <?php echo $unique_id; ?></h4>
							<p class="text-muted">We strongly recommend you to save this number.</p>
						</div>
					</div>
				</div>


<?php include "footer.php"; ?>