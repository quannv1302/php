<h1>Homepage</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Cate name</th>
            <th>Color</th>
            <th>Price</th>
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
            </tr>
        <?php endforeach ?>
    </tbody>
</table>