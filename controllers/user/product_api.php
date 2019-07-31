<?php 
header("Content-type: application/json; charset=utf8");
checkLogin();
$product_type = new Classes\Model\Type;

if (isset($_GET["getTypes"])){
    $types = $product_type->select(["*"]);
  
    print_r(json_encode($types));
}
