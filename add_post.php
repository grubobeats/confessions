<?php
require "assets/config.php";
// Insert Header
include "header.php";

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
						<div class="panel panel-success wow fadeIn" data-wow-duration="2s">
						  	<div class="panel-heading">
						    	<h3 class="panel-title">Добавьте ваше признание</h3>
						  	</div>
							<div class="panel-body">
							  	 <div class="col-sm-4">
							  	 	<legend>Защита личных данных:</legend>
								    <p>We have unique and the most simple privacy policy. We do not store any data from your computer, we do not use cookies. <strong>All your confessions are 100% anonymous.</strong> You will be the only one who will know who wrote this confession.
								</div>
							  	<div class="col-sm-8">
								    <legend>Признание:</legend>
		
									<div class="form-group">
										<textarea name="content" id="inputContent" class="form-control" rows="5" required="required"></textarea>
									</div>
									<button type="submit" name="submit_content" class="btn btn-primary pull-right" onclick="postadder(this)">Добавить признание</button>
							    </div> 
							</div>
						</div>
					</div>
				</div>


<?php include "footer.php"; ?>