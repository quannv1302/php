<?php 
require_once 'models/Product.php';
require_once 'models/Category.php';
$id = $_GET['id'];

$post = Product::find($id);
if(!$post){
	echo "<h1>Bài viết không tồn tại</h1>";
	die;
}
$post->delete();
header('location: list.php');

 ?>