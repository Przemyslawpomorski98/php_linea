<?php 
	require "../conection.php";
	
	$q_request = $_GET['q'];

	$sql_string = "SELECT * FROM posts WHERE Id = '$q_request'";
	$get_post_info = mysqli_query($link,$sql_string);
	$get_post_row = mysqli_fetch_array($get_post_info);
 ?>

 <?php do { ?>

 	<div class="ajax_request">
 		<h3 class="orange"><?php echo $get_post_row['Title']; ?></h3>
 		<p><?php echo $get_post_row['Content']; ?></p>
 	</div>

 	


 <?php } while ($get_post_row = mysqli_fetch_array($get_post_info)); ?>