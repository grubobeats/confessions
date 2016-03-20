<?php
require "/assets/config.php";
// Insert Header
include "header.php";
?>


<!-- HEADER -->
			<form action="add_post.php" method="POST" role="form">
				<div class="row">
					<div class="col-sm-12">
						<ol class="breadcrumb">
						  <li class="active">Популярные признания</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
					
						<!-- TEST PANEL -->

						<div class="panel panel-default">
						  	<div class="panel-heading">
						    	<h3 class="panel-title"># 605615613</h3>
						  	</div>
							<div class="panel-body">
							  	 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  	 				   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  	 				   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							  	 				   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							  	 				   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							  	 				   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.				   
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-sm-7">
										<label>What you think?</label>
										<div class="btn-group btn-group-justified" role="group" aria-label="...">
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-default"><i class="fa fa-thumbs-up"></i> I approve <span class="badge">652</span></button>
											</div>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-default"><i class="fa fa-thumbs-down"></i> I judge you! <span class="badge">11</span></button>
											</div>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-default"><i class="fa fa-comment-o"></i> <span class="badge">32</span></button>
											</div>
										</div>
									</div>
									<div class="col-sm-5">
										<label class="pull-right">Share on:</label>
										<div class="btn-group btn-group-justified" role="group" aria-label="...">
											<div class="btn-group" role="group">
											<button type="button" class="btn btn-default"><i class="fa fa-facebook"></i> Facebook</button>
											</div>											
											<div class="btn-group" role="group">
											<button type="button" class="btn btn-default"><i class="fa fa-vk"></i> VKontakt</button>
											</div>
											<div class="btn-group" role="group">
											<button type="button" class="btn btn-default"><i class="fa fa-twitter"></i> Twitter</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- ./ TEST PANEL END -->
						
					</div>
				</div>
			</form>
<!-- FOOTER -->
<?php include "footer.php" ?>