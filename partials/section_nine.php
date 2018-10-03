<?php require 'section_nine_array_of_posts.php' ?>

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

          <?php 
            $wpisy_zapytanie = "SELECT * FROM posts";
            $wpisy_array = mysqli_query($link, $wpisy_zapytanie);
            $table_row = mysqli_fetch_array($wpisy_array);
           ?> 
            
      <?php do { ?>
          <?php $post_id = $table_row['Id']; ?>
          <div class="item owl_posts">
            <img src="http://www.themenesia.com/themeforest/linea-new/images/blog/pic-blog-5.jpg" class="img-fluid">
            <div class="owl_posts_content">
              <h3><?php echo $table_row['Title']; ?></h3>
              <p><?php echo $table_row['Content']; ?></p>
              <form action="single_post.php" method="POST">
                <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                <button type="submit" name="post_id_form">Zobacz więcej..</button>
              </form>
            </div>
          </div>
       <?php } while ($table_row = mysqli_fetch_array($wpisy_array)); ?>
        </div>
      </section>