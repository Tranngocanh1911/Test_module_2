<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>


<div class="container">
    <a href="index.php?page=add-product">ADD PRODUCT</a>
    <table class="table" id="nuochoa">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên hàng</th>
            <th scope="col">Loại hàng</th>
            <th scope="col" colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)) {
            foreach ($products as $product) :?>
                <tr>
                    <th scope="row"><?php echo $product->getId() ?></th>
                    <td><?php echo $product->getName() ?></td>
                    <td><?php echo $product->getType() ?></td>
                    <td><a href="index.php?page=update-product&id=<?php echo $product->getId()?>" class="btn btn-warning btn-lg">Edit</a></td>
                    <td><a href="index.php?page=delete-product&id=<?php echo $product->getId()?>" class="btn btn-danger btn-lg">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script>

        </script>
        </tbody>
    </table>
</div>

<?php include_once '../Layout/footer.php' ?>

</body>
</html>
