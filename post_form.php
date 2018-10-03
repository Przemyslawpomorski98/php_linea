<?php
session_start();
require "conection.php";
require "header.php";
$title = "Dodaj wpis";
include "partials/subheader.php";

// ----------ADD POST------------
// ----------ADD POST------------
$post_title = $_SESSION['title'];
$post_content = $_SESSION['content'];
$add_post = $_SESSION['add_post'];
// ----------ADD POST------------
// ----------ADD POST------------


// ------------EDIT POST------------
// ------------EDIT POST------------
    if (isset($_POST['edit_post'])) {
      @$post_id_edit = $_POST['post_id'];
      @$post_title_edit = $_POST['post_title'];
      @$post_content_edit = $_POST['post_content'];
    }
// ------------EDIT POST------------
// ------------EDIT POST------------
?>



<section id="form">
  <div class="container"> 
    <div class="row">
      <?php if (($add_post == true) && ($add_post != "") ){ ?>
          <div class="alert alert-success">
            <h3>
              Udało Ci się dodać wpis o tytule
              <?php echo $post_title; ?>
            </h3>
          </div>
      <?php }elseif (($add_post == false) && ($add_post != "")){ ?>
        <div class="alert alert-danger">
          <h3>
            Coś poszło nie tak
          </h3>
        </div>
     <?php } ?>
     <?php $_SESSION['add_post'] = ""; ?>
    </div>
    <form action="post_form_server.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wpisz tytuł wpisu" name="title" <?php if (@$post_title_edit) { ?> value="<?php echo $post_title_edit; ?>" <?php } ?> required>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="content"cols="30" rows="10" placeholder="Wpisz treść wpisu" name="content" required><?php if (@$post_content_edit) { ?> <?php echo @$post_content_edit; ?> <?php } ?></textarea>
      </div>
      <input type="hidden" name="post_id" value="<?php echo $post_id_edit; ?>">

      <?php if (@$post_id_edit) { ?>
      <button type="submit" name="edit_post_sec" class="btn btn-primary">Edytuj wpis</button>
      <?php }else { ?>
      <button type="submit" name="add_post" class="btn btn-primary">Dodaj wpis</button> 
      <?php } ?>

    </form>
  </div> 
</section>



<?php
require "footer.php";
?>