<?php

// require MySQL Connection
require ('../database/dbController.php');

// require Product Class
require ('../database/Product.php');

// DBController object
$db = new dbController();

// Product object
$product = new Product($db);

if(isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}

?>