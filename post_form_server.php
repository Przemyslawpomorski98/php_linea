<?php 

require 'conection.php';
session_start();

  if (isset($_POST['add_post'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];


    $add_post_str = "INSERT INTO posts (Id, Title, Content) VALUES (NULL, '$title', '$content');";


    $add_post = mysqli_query($link, $add_post_str);

    $_SESSION['title'] = $title;
    $_SESSION['content'] = $content;
    $_SESSION['add_post'] = $add_post;

    header('Location: post_form.php');
    exit();
  }

  if (isset($_POST['delete_post'])) {
  	$post_id = $_POST['post_id'];
  	$sql_str = "DELETE FROM posts WHERE posts.Id = '$post_id'";
  	$delete_post = mysqli_query($link, $sql_str);
  	header('Location: index.php');
  	exit();
  }

  if (isset($_POST['edit_post_sec'])) {
  	$post_id = $_POST['post_id'];
  	$post_title = $_POST['title'];
  	$post_content = $_POST['content'];

  	$sql_str = "UPDATE posts SET Title = '$post_title', Content = '$post_content' WHERE posts.Id = '$post_id'";;
  	$update_post = mysqli_query($link,$sql_str);

  	header('Location: index.php');
  	exit();
  }

 ?>