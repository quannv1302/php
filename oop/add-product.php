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
        Color: <input type="text" name="color">
    </div>
    <div>
        Price: <input type="text" name="price">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>