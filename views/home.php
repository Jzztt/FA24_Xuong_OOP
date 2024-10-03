<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Đây là list danh sách sản phẩm</h1>
    <button><a href="?act=add">Add</a></button>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img width="100" src="./img/<?= $product['image'] ?>" alt=""></td>
                    <td><?= $product['price'] ?></td>
                    <td>
                        <a href="?act=update&id=<?= $product['id'] ?>"> Update</a>
                        <a onclick="return confirm('Are you sure')" href="?act=delete&id=<?= $product['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>