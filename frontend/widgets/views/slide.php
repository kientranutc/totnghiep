 <div class="slideshow">
        <div class="slideanh owl-theme ">
          <?php 
             if(!empty($dataSlide))
             {
             	foreach ($dataSlide as $key => $value) { 
             ?>
          <div class="slide"><a href="<?php echo $value['url']; ?>"><img src="<?php echo $value['image'] ?>" alt=""></a></div>
            <?php 
            }
            } ?>
        </div>
      </div>