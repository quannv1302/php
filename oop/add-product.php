<?php
require_once 'models/Category.php';

$cates = Category::all();

?>

<form action="save-add-product.php" method="post">
    <div>
        Name: <input type="text" name="name">
    </div>
    <div>
        Cate:
        <select name="cate_id">
            <?php foreach($cates as $cate) : ?>
                <option value="<?=$cate->id;?>"><?=$cate->name;?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        Color: 
        <select name="color">
            <option value="Red">Red</option>
            <option value="Yellow">Yellow</option>
            <option value="Black">Black</option>
            <option value="White">White</option>
        </select>
    </div>
    <div>
        Price: <input type="text" name="price">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>