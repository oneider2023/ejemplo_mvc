<?php

// Call model
require_once "objects/productsOjects.php";
$products = ProductObjects::getAllproducts();
$json_response = json_encode($products);

echo $json_response;