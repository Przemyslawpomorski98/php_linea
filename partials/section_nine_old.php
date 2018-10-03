<?php require 'section_nine_array_of_posts.php' ?>
<?php var_dump($posts); 
  foreach ($posts as $post) {
    
  }
?>

 <section class="nine">
        <div class="container">
          <div class="row">
              <div class="col">
                <h4 class="main_font orange">NEWS</h4>
                 <h3 class="main_font">Latest Post</h3>
              </div>
          </div>
        </div>
        <div class="owl-carousel owl-theme">

          <?php  foreach ($posts as $post) { ?>
          <div class="item owl_posts">
            <img src="http://www.themenesia.com/themeforest/linea-new/images/blog/pic-blog-5.jpg" class="img-fluid">
            <div class="owl_posts_content">
              <h3><?php echo $post['title']; ?></h3>
              <p><?php echo $post['content']; ?></p>
            </div>
          </div>
          <?php } ?>
        </div>
      </section>