<?php
require_once 'models/Product.php';
$id = $_GET['id'];

$product = Product::find($id);

?>

<div style="background-color: aqua;">
    <h1><?=$product->name;?></h1>
    <p><?=$product->getCateName();?></p>
    <p><?=$product->color;?></p>
    <p><?=$product->price;?></p>
    <div>
        <a href="update.php?id=<?=$product->id;?>">Update</a>
    </div>
</div>