<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="components/slider.css">
<section>
  <div class="container custom">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Category</h3>
            </div>
            <div class="col-6 text-right">
            </div>
            <div class="col-sm-12 slick-slider">
                        <?php
            for ($x = 0; $x < count($categorychunk); $x++) {
                    ?> 
                                <?php
            for ($y = 0; $y < count($categorychunk[$x]); $y++) {
                    ?>
                                  <div class="element element-1">
                <a href="testingdsmoasoas" style= "  color: blue; text-decoration: none;">
                <div class="mainText" style ="background-image :url('<?php echo $categorychunk[$x][$y]->category_image ?>');background-size: cover;width: 200px; height: 200px;">
                  <div class="overlay">
                    <div class="textEnd">
                  <h2 class="mainText-heading"><?php echo $categorychunk[$x][$y]->category_name ?></h2>
                  </div>
                  </div>
                </div> </a>
            </div>       
        <?php } ?>
                            <?php } ?>
                </div>
            </div>
        </div>
</section>