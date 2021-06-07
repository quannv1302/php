<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="col-6 offset-3">
            <h1>Update product</h1>
            <br>
            <form action="index.php?r=admin/update-product/save-update" method="post">
            <input type="hidden" name="id" value="<?php echo $product->id ?>">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder=""
                        value="<?php echo $product->name ?>"
                        >
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Category :</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="cate_id">
                            <?php foreach ($cates as $cate) : ?>
                                <option
                                    <?php if($cate->id == $product->cate_id):?>
                                        selected
                                    <?php endif ?>
                                    value="<?= $cate->id; ?>"><?= $cate->name; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Color :</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="color">
                            <option value="1" 
                                    <?php if($product->color == 1):?>
                                        selected
                                    <?php endif ?>
                            >Black</option>
                            <option value="2" 
                                    <?php if($product->color == 2):?>
                                        selected
                                    <?php endif ?>
                            >White</option>
                            <option value="3" 
                                    <?php if($product->color == 3):?>
                                        selected
                                    <?php endif ?>
                            >Gold</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Price :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" placeholder=""
                        value="<?php echo $product->price ?>"
                        >
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="index.php?r=product">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>