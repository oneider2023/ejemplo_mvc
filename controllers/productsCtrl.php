<?php

// Call model
require_once "models/productsModel.php";
$products = product::getAllproducts();

// Call the view
require_once "views/productsView.php";

