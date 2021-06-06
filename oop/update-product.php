<?php
require_once './models/Product.php';
require_once './models/Category.php';

$id = $_POST['id'];
$name = $_POST['name'];
$cate_id = $_POST['cate_id'];
$color = $_POST['color'];
$price = $_POST['price'];

$model = Product::find($id);
if(!$model){
    echo "<h1>Không tồn tại thông tin</h1>";die;
}

$model->name = $name;
$model->cate_id = $cate_id;
$model->color = $color;
$model->price = $price;

$model->update();

header('location: list.php');

?>