<?php

//require mySql connection
require("database/dbController.php");

//require Product.php
require("database/Product.php");

//require Cart.php
require("database/Cart.php");

//dbController object
$db = new dbController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart Object
$Cart = new Cart($db);




?>