<!-- shopping cart section-->
<?php
$product = new Product($db);
$Cart = new Cart($db);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['delete-cart-submit'])) {
        $deletedRecord = $Cart->deleteCart($_POST['item_id']);
    }

    // save for later
    if (isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }
}

?>


<section id="cart" class="py-4">
            <div class="container-fluid w-75">
                <h5 class="font-rubik font-size-20">Shopping Cart</h5>

                <!-- shopping cart items-->
                <div class="row">
                    <div class="col-sm-9">
                    <?php 
                        foreach($product->getData('cart') as $item): 
                            $cart = $product->getProduct($item['item_id']);
                            $subtotal[] = array_map(function ($item) use ($product, $Cart) {
                    ?>
                        <!-- cart item-->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                                <!-- product rating-->
                                <div class="d-flex">
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
                                </div>
                                <!-- !product rating-->

                                <!-- product quantity-->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" class="qty_input border px-2 w-50 bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <form method="post">
                                    <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                    <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <?php if(in_array($item['item_id'], $Cart->getCartId($product->getData('wishlist')) ?? [])){
                                            echo '<button type="submit" disabled class="btn font-baloo text-success">In the Wishlist</button>';
                                        } else{
                                            echo '<button type="submit" name= "wishlist-submit" class="btn font-baloo text-primary">Save for later</button>';
                                        } ?>
                                    </form>

                                </div>
                                <!-- !product quantity-->
                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-baloo font-size-20 text-danger">
                                    $<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- !cart item-->
                    <?php 
                        return $item['item_price'];
                        }, $cart); //closing array map function
                        endforeach; ?>
                    </div>

                    <!-- sub-total section-->
                    <div class="col-sm-3">
                        <div class="sub-total border text-center mt-2">
                            <h6 class="font-baloo font-size-12 text-success py-3"><i class="fas fa-check"></i>Your Order is eligible for free delivery</h6>
                            <div class="border-top py-4">
                                <h5 class="font-baloo dont-size-20">Subtotal (<?php echo isset($subtotal) ? count($subtotal) : 0; ?> items):&nbsp;<span class="text-danger">$</span><span class="text-danger" id="deal-price"><?php echo isset($subtotal) ? $Cart->getSum($subtotal) : 0 ?></span></h5>
                                <button type="submit" class="btn btn-warning mt-3">Payment</button>
                            </div>
                        </div>
                    </div>
                    <!-- !sub-total section-->
                    
                </div>
                <!-- !shopping cart items-->
            </div>
        </section>
        <!-- !shopping cart section-->