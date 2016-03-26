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
						    	<h3 class="panel-title">Contact</h3>
						  	</div>
							<div class="panel-body">
							  	 <div class="col-sm-4">
							  	 	<legend>Info:</legend>
								    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								    tempor incididunt ut labore et dolore magna aliqua.
								</div>
							  	<div class="col-sm-8">
								    <legend>Your message:</legend>
		
									<div class="form-group">
										<label>Your name:</label>
										<input name="content" id="inputName" class="form-control" rows="3" required="required"></input>
									</div>
									<div class="form-group">
										<label>Your e-mail:</label>
										<input name="content" id="inputEmail" class="form-control" rows="3" required="required"></input>
									</div>
									<div class="form-group">
										<label>Message:</label>
										<textarea name="content" id="inputMessage" class="form-control" rows="3" required="required"></textarea>
									</div>
									<button type="submit" name="submit_content" class="btn btn-primary pull-right" onclick="postadder(this)">Добавить признание</button>
							    </div> 
							</div>
						</div>
					</div>
				</div>


<?php include "footer.php"; ?>