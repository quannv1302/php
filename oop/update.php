<?php
require_once 'models/Product.php';
require_once 'models/Category.php';

$id = $_GET['id'];

$product = Product::find($id);
if(!$product){
    echo "<h1>Sản phẩm ko tồn tại</h1>";die;
}
$cates = Category::all();

?>

<form action="update-product.php" method="post">
    <input type="hidden" name="id" value="<?php echo $product->id ?>">
    <div>
        Name: <input type="text" name="name" value="<?=$product->name;?>">
    </div>
    <div>
        Cate:
        <select name="cate_id">
            <?php foreach($cates as $cate) : ?>
            
                <option
                <?php if($cate->id == $product->cate_id): ?>
                    selected
                <?php endif ?>
                 value="<?=$cate->id;?>"><?=$cate->name;?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        Color: <input type="text" name="color" value="<?=$product->color;?>">
    </div>
    <div>
        Price: <input type="text" name="price" value="<?=$product->price;?>">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>