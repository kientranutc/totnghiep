<!-- view cateories widgest -->

<div class="submenu">
                <ul>

                <?php if(!empty($dataCatlevel))
                {  $id;
                  foreach ($dataCatlevel as $key => $value) {
                  	$id=$value['id'];
                 ?>
                  <li><a href=""><i class="<?php echo $value['cat_icon'] ?>" aria-hidden="true"></i><?php echo $value['cat_name'] ?></a>
                  <?php 
                    $checkExitsparent=$cat->checkSubcat($value['id']);
                    if(count( $checkExitsparent)>0)
                    {
                   ?>
                   <ul class="sub1">
                     <div class="sub-content">
                       <div class="sub-title">
                         <h3>Hãng sản xuất</h3>
                       </div>
                       <div class="row">
                           
                        <div class="col-md-3">
                          <ul class="colmenu">
                          <?php 
                          $firstSubparent=array_slice($checkExitsparent,0,5);
                            foreach ($firstSubparent as $key => $value) {
                            ?>
                           <li><a href=""><?php echo $value['cat_name']; ?></a></li>
                             <?php  
                              } ?>
                         </ul>
                       </div>
                       <div class="col-md-3">
                        <ul class="colmenu">
                        <?php 
                         $secSubparent=array_slice($checkExitsparent,5,5);
                         foreach ( $secSubparent as $key => $value) {
                         ?>
                         <li><a href=""><?php echo $value['cat_name']; ?></a></li>
                         <?php } ?>

                       </ul>
                     </div>
                     <div class="col-md-6">

                       <div class="colmenu-logo">
                       
                         <img src="<?php echo $cat->getImagecat($id); ?>" alt="">
                       </div>
                     </div>

                   </div>

                 </div>

               </ul>
               <?php } ?>
             </li>

             <?php } }?>
            
 
</ul>
</div>