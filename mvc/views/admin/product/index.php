<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Admin Product</h1>
        <br>
        <form action="index.php?r=admin/search-product" method="post">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
                <input type="text" class="form-control" name="keyword">
            </div>
        </form>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Cate name</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>
                        <a class="btn btn-sm btn-success" href="index.php?r=admin/add-product">Add new</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($productFilter)): ?>
                    <?php foreach ($productFilter as $pF) : ?>
                    <tr>
                        <td><?= $pF->id; ?></td>
                        <td><?= $pF->name; ?></td>
                        <td><?= $pF->getCateName(); ?></td>
                        <td>
                            <?php if($pF->color == 1) { ?>
                                Black
                            <?php }else if($pF->color == 2) { ?>
                                White
                            <?php }else if($pF->color == 3) { ?>
                                Gold
                            <?php } ?>
                        </td>
                        <td><?= $pF->price; ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="index.php?r=admin/update-product&id=<?= $product->id; ?>">Update</a>
                            <a class="btn btn-sm btn-danger" href="index.php?r=admin/remove-product&id=<?= $product->id; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <?php endif ?>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $product->id; ?></td>
                        <td><?= $product->name; ?></td>
                        <td><?= $product->getCateName(); ?></td>
                        <td>
                            <?php if($product->color == 1) { ?>
                                Black
                            <?php }else if($product->color == 2) { ?>
                                White
                            <?php }else if($product->color == 3) { ?>
                                Gold
                            <?php } ?>
                        </td>
                        <td><?= $product->price; ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="index.php?r=admin/update-product&id=<?= $product->id; ?>">Update</a>
                            <a class="btn btn-sm btn-danger" href="index.php?r=admin/remove-product&id=<?= $product->id; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>