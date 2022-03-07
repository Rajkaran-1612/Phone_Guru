 <!-- Product-->
 <?php 
      //request method post
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if(isset($_POST['product-submit'])) {
                //call method addToCart
                $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }   
  }
    $item_id = $_GET['item_id'] ?? 1;
    foreach($product->getData() as $item):
        if($item['item_id'] == $item_id):
 ?>
 <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product1" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-dark form-control">Proceed to Pay</button>
                            </div>
                            <div class="col">
                            <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                } else{
                                echo '<button type="submit" name= "product-submit" class="btn btn-warning form-control">Add to cart</button>';
                                } ?>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h4 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown" ?></h4>
                        <small>by <?php echo $item['item_brand'] ?? "Brand" ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12 py-2">
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
                              <a href="#" class="px-2 py-2 font-rale font-size-12">Customer reviews and ratings</a>
                        </div>
                        <hr class="m-0">

                        <!-- Product price-->
                        <table class="my-3">
                            <tr class="font-rubik font-size-14">
                                <td>M.R.P(Original Price):</td>
                                <td class="px-2"><strike>$<?php echo $item['item_mrp'] ?? "0"; ?></strike></td>
                            </tr>
                            <tr class="font-rubik font-size-14">
                                <td class="py-2">Guru's Special Price:</td>
                                <td class="px-2 text-danger font-size-20">$<?php echo $item['item_price'] ?? "0" ?></td>
                            </tr>
                            <tr class="font-rubik font-size-14">
                                <td>Total Amount Saved:</td>
                                <td class="px-2 text-danger font-size-16">$<?php echo $item['item_saving'] ?? "0"; ?></td>
                            </tr>
                        </table>
                        <!-- !Product price-->

                        <!-- policies-->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-blue">
                                        <span class="fas fa-truck rounded-pill border p-3"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Phone Guru <br> Delivered</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-blue">
                                        <span class="fas fa-retweet rounded-pill border p-3"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Replacement <br> within 30 days</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-blue">
                                        <span class="fas fa-check rounded-pill border p-3"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">1 Year <br> Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- !policies-->

                        <hr>
                        <!-- Order details-->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery by: 15th July</small>
                            <small>Sold by: <a href="./index.html">Phone Guru</a></small>
                            <small><i class="fas fa-map-marker-alt color-blue"></i>&nbsp;&nbsp;Deliver to Customer - 484848</small>
                        </div>
                        <!-- !Order details-->

                        
                        <div class="row">
                            <div class="col-6">
                                <!-- Color-->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color:</h6>
                                        <div class="p-2 color-blue-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-grey-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-red-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                                <!-- !Color-->
                            </div>
                            <div class="col-6">
                                <!-- Quantity of product-->
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty:</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <!-- !Quantity of product-->
                            </div>
                        </div>
                        

                        <!-- size-->
                        <div class="size my-3">
                            <h6 class="font-baloo">Size:</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 fpnt-size-14">4GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 fpnt-size-14">6GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 fpnt-size-14">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                        <!-- !size-->
                    </div>
                    <div class="col-12">
                        <h6 class="font-rubik">Product Description:</h6>
                        <hr>
                        <p class="font-rale font-size-14"><?php echo $item['item_desc1'] ?? "Null"; ?></p>
                        <p class="font-rale font-size-14"><?php echo $item['item_desc2'] ?? "Null"; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <?php   endif;
            endforeach; ?>
        <!-- !Product-->