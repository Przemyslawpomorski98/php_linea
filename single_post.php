<?php
session_start();
require "conection.php";
require "header.php";

	$post_id = $_POST['post_id'];
	

	$sql_str = "SELECT * FROM posts WHERE Id = '$post_id'";
	$post_query = mysqli_query($link, $sql_str);
	$post = mysqli_fetch_array($post_query);

	$title = $post['Title'];
	$content = $post['Content'];

include "partials/subheader.php";
?>
<?php 
	
 ?>

<section id="single_post">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="img/post_image.jpg" alt="" class="img-fluid">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo $title ?></h2>
				<p><?php echo $content ?></p>
			</div>
		</div>
		<form action="post_form_server.php" method="POST">
			<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
			<button type="submit" name="delete_post" class="btn btn-primary">
				Usuń wpis
			</button>
		</form>
		<form action="post_form.php" method="POST">
			<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
			<input type="hidden" name="post_title" value="<?php echo $title; ?>">
			<input type="hidden" name="post_content" value="<?php echo $content; ?>">
			<button type="submit" class="btn btn-primary" name="edit_post">
				Edytuj post
			</button>
		</form>
	</div>
</section>

<?php require 'footer.php'; ?>