<?php 
require_once 'models/Product.php';

$name = $_POST['name'];
$cate_id = $_POST['cate_id'];
$color = $_POST['color'];
$price = $_POST['price'];

$model = new Product();

$model->name = $name;
$model->cate_id = $cate_id;
$model->color = $color;
$model->price = $price;

$model = $model->insert();
if(!$model){
	echo "<h1>Thêm mới thất bại</h1>";
	die;
}
//5 redirect ve trang chu (list.php)
header('location: list.php');

 ?>