 <div class="cart">
              <a href="#">
                <span class="inner-cart">
                  <span class="glyphicon glyphicon-shopping-cart"></span>
                  <span class="total-cart">
                    <?php 
                    if(!empty($cartAdd)){
                    $totalAddcat=0;
                    foreach ($cartAdd as $key => $value) {
                      $totalAddcat+=$value['quantity'];
                    }
                    echo $totalAddcat;
                  }
                  else{
                    echo "0";
                  }
                ?>
                  </span>
                </span>
                <span>Giỏ hàng</span>
              </a>
            </div>