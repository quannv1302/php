<?php
require_once 'models/Category.php';
require_once 'models/Product.php';

// $list = Product::where(['cate_id','>','1'])
//                 ->andWhere(['id', '3'])
//                 ->get();
$listProduct = Product::all();
?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Cate</th>
            <th>Price</th>
            <th>Color</th>
            <th>
 				<a href="add-product.php" title="">Add new</a>
 			</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listProduct as $product) : ?>
            <tr>
                <td><?=$product->id;?></td>
                <td><a href="detail.php?id=<?=$product->id;?>"><?=$product->name;?></a></td>
                <td><?=$product->getCateName();?></td>
                <td><?=$product->price;?></td>
                <td><?=$product->color;?></td>
                <td>
	 				<a href="update.php?id=<?php echo $product->id ?>" title="">Update</a>
	 				<a href="remove-product.php?id=<?php echo $product->id ?>" title="">Remove</a>
	 			</td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>