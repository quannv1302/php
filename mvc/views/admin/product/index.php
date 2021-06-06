<h1>Admin Product</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Cate name</th>
            <th>Color</th>
            <th>Price</th>
            <th>
                <a href="index.php?r=admin/add-product">Add new</a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($products as $product): ?>
            <tr>
                <td><?=$product->id;?></td>
                <td><?=$product->name;?></td>
                <td><?=$product->getCateName();?></td>
                <td><?=$product->color;?></td>
                <td><?=$product->price;?></td>
                <td>
                    <a href="index.php?r=admin/update-product&id=<?=$product->id;?>">Update</a>
                    <a href="index.php?r=admin/remove-product&id=<?=$product->id;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>