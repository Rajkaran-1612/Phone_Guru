<?php 
  $product_shuffle = $product->getData();
  shuffle($product_shuffle); 
  
  //request method post
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['new-phones-submit'])) {
      //call method addToCart
      $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }   
  }
  ?>

<!-- New Phone-->
<section id="new-phones">
          <div class="container">
            <h4 class="font-rubik font-size-20">New Phones</h4>
            <hr>

             <!-- owl carousel-->
             <div class="owl-carousel owl-theme">
             <?php foreach($product_shuffle as $item) {
              if($item['item_id'] <= 8) {
              ?>
              <div class="item py-2 bg-light">
                <div class="product font-rale">
                  <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                    <div class="rating text-warning font-size-12">
                    <?php if($item['item_stars'] == 3): ?>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            <?php endif; ?>
                            <?php if($item['item_stars'] == 4): ?>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            <?php endif; ?>
                            <?php if($item['item_stars'] == 5): ?>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            <?php endif; ?>
                    </div>
                    <div class="price py-2">
                      <span>$<?php echo $item['item_price'] ?? "0"; ?></span>
                    </div>
                    <form method="post">
                      <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                      <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                      <?php if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                        echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                      } else{
                        echo '<button type="submit" name= "top-sale-submit" class="btn btn-warning font-size-12">Add to cart</button>';
                      } ?>
                    </form>
                  </div>
                </div>
              </div>
            <?php } //closing if
            } //closing foreach loop ?>
              
              
            
            </div>
            <!-- !owl carousel-->

          </div>
        </section>
        <!-- !New Phone-->