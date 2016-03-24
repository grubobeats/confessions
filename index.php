<?php
require "/assets/config.php";
// Insert Header
include "header.php";

// Read from database

$read_posts = "SELECT * FROM `posts` ORDER BY `id` DESC";
$resoult = mysqli_query($conn, $read_posts);






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
						<?php
						if (mysqli_num_rows($resoult) > 0) {
							while ($row = mysqli_fetch_array($resoult)) {
								$id = $row["id"];
								$content = $row["content"];
								$likes = $row["likes"];
								$dislikes = $row["dislikes"];
								$comments_counter = $row["comments_counter"];
								$unique_id = $row["unique_id"];
								$post_id = $row["id"];
							?>
							<div class="panel panel-info">
						  	<div class="panel-heading">
						    	<a href="#"><h3 class="panel-title"><?php echo "#" . $unique_id; ?></h3></a>
						  	</div>
							<div class="panel-body">
							  	 <?php echo $content; ?>	
							  	 <input id="id_holder" type="hidden" value="<?php echo $post_id; ?>"></input>		   
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-sm-7">
										<label>What you think?</label>
										<div class="btn-group btn-group-justified" role="group" aria-label="..." >
											<div class="btn-group" role="group" post-id="<?php echo $post_id;?>">
												<button type="button" class="btn btn-default" id="like" class="like" onclick="likeFunction(this)"><i class="fa fa-thumbs-up"></i> I approve <span class="badge" id="likes_num"><?php echo $likes;?></span></button>
											</div>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-default"><i class="fa fa-thumbs-down"></i> I judge you! <span class="badge"><?php echo $dislikes;?></span></button>
											</div>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-default"><i class="fa fa-comment-o"></i> <span class="badge"><?php echo $comments_counter;?></span></button>
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




							<?php
							}
						}
						else {
							echo '<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-warning-sign"> No posts</span></div>';
						}
						?>
						
						
					</div>
				</div>
			</form>
<!-- FOOTER -->
<script>
	<?php 
		echo "var post_id = " . $post_id;
	?>



</script>
<?php include "footer.php" ?>
