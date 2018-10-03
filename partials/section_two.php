<?php require 'section_two_array_of_posts.php' ?>
<?php 
  foreach ($box as $post) {

  }
?>

<section class="two">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="row s2_margin">
                <i class="fa fa-quote-left orange quote" aria-hidden="true"></i>
              </div>
              <div class="row s2_margin">
                <div class="s2_text">
                  <h3>For every complex problem, there is an answer that is clear, simple, and wrong.</h3>
                  <span class="orange">Words by H. L. Mencken</span>
                </div>
              </div>
            </div>
            
          <?php foreach ($box as $element) { ?>
            <div class="col-12 col-md-4 box_margin">
              <div class="box_one">
                <div class="box_overlay">
                  <div class="row margin_zero">
                    <i class="fa fa-pie-chart orange" aria-hidden="true"></i>
                    <h3><?php echo $element['title']; ?></h3>
                  </div>
                  <div class="row margin_zero">
                    <span><?php echo $element['content']; ?></span>
                  </div>
                </div>
              </div>
            </div>
<?php } ?>

      
          </div>
        </div>
      </section>